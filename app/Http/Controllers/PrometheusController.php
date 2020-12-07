<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;

class PrometheusController extends Controller
{
    public function index(Request $requests)
    {
        file_put_contents('D:\config.yaml', $yaml);
        $parameter = json_decode($requests->getContent());
        // return response()->json($requests->getContent(), 200);
        foreach ($parameter as $request){ 
            
            $inData[] = [

            'job_name' => $request->job_name,
            'interval' => $request->interval,
            'target' => $request->target

            ];
        }

      /* $inData = array (
            ["job_name"=>'node_exporter_metrics',"interval"=>"123456", "target"=>"123"],
            ["job_name"=>'node_exporter_metrics_2',"interval"=>"654321", "target"=>"123"],
        );
*/
        $json = array ();
        $outData = array ();
        $jsona;
        foreach ($inData as $value) {
            $entry =   array(
                'job_name' => $value['job_name'],
                'scrape_interval' => $value['interval'],
                'static_configs' =>
                array (
                    0 =>
                    array (
                        'targets' =>
                        array (
                            0 => $value['target']
                        )
                    )
                )
                );
            
            array_push($outData, $entry);
        };

            $jsona = json_encode($outData);

            $yaml = Yaml::dump($outData,4,2);
            file_put_contents('D:\config.yaml', $yaml);
            return response()->json("Successfully Added", 200);
    }
    
}

/*
     
      FILE_APPEND
- job_name: 'node_exporter_metrics'
    scrape_interval: 5s
        static_configs:
        - targets: ['172.16.155.60:9100']
        
        */

