<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;

class PrometheusController extends Controller
{
    public function index(Request $requests)
    {

        $indata = [];
       /* $responseArray = json_decode($requests->getBody(), true);
        return response()->json($responseArray['posts'], 200);*/
        $proms = $requests['collection'];
        return response()->json($proms, 200);
        foreach ($requests as $request){ 
            $inData[] = [

            'job_name' => $request['job_name'],
            'interval' => $request['interval'],
            'target' => $request['target']

            ];
        }
        return response()->json($inData, 200);

        /*$array =   array(
            'job_name' => 'node_exporter_metrics',
            'scrape_interval' => '5s',
            'static_configs' =>
            array (
                0 =>
                array (
                    'targets' =>
                    array (
                        0 => 'fskldfklsd'
                    )
                )
            )
        );*/
        
      /*  $inData = array (
            ["foo"=>'node_exporter_metrics',"bar"=>"123456"],
            ["foo"=>'node_exporter_metrics_2',"bar"=>"654321"],
            );
*/
        //json_decode($proms)
        $json = array ();
        $outData = array ();
        $jsona;
        foreach (json_decode($proms) as $value) {
            $entry =
            [
                'job_name' => $value->job_name,
                "scrape_interval" => $value->interval,
                "static_configs" => [
                'targets' => $value->target]
                                  
            ];
            
            
            array_push($outData, $entry);
        };

            $jsona = json_encode($outData);

            $yaml = Yaml::dump($jsona,3,2);
            file_put_contents('config.yaml', $yaml);/*
         */
    }
}

/*
     
      FILE_APPEND
- job_name: 'node_exporter_metrics'
    scrape_interval: 5s
        static_configs:
        - targets: ['172.16.155.60:9100']
        
        */