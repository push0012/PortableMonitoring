<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;

class PrometheusController extends Controller
{
    public function index(Request $requests)
    {
        $ymalfilepath = 'D:\app\config.yaml'; //change this line to set config.ymal file path
        file_put_contents($ymalfilepath, "global:\n");
        file_put_contents($ymalfilepath, "\tscrape_interval:\t\t\t15s\n",FILE_APPEND);
        file_put_contents($ymalfilepath, "\tevaluation_interval:\t15s\n\n",FILE_APPEND);

        file_put_contents($ymalfilepath, "\texternal_labels:\n",FILE_APPEND);
        file_put_contents($ymalfilepath, "\t\t\tmonitor: "."'"."example"."'"." \n\n",FILE_APPEND);

        file_put_contents($ymalfilepath, "alerting:\n",FILE_APPEND);   
        file_put_contents($ymalfilepath, "\talertmanagers:\n",FILE_APPEND);
        file_put_contents($ymalfilepath, "\t- static_configs:\n",FILE_APPEND);
        file_put_contents($ymalfilepath, "\t\t- targets: ['localhost:9093']"."\n\n",FILE_APPEND);

        file_put_contents($ymalfilepath, "rule_files:\n",FILE_APPEND);  
        file_put_contents($ymalfilepath, "\t# - "."\""."first_rules.yml"."\""."\n",FILE_APPEND);
        file_put_contents($ymalfilepath, "\t# - "."\""."second_rules.yml"."\""."\n\n",FILE_APPEND);

        file_put_contents($ymalfilepath, "scrape_configs:\n",FILE_APPEND);  

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

        file_put_contents($ymalfilepath, "\t- job_name: '".$value['job_name']."'"."\n",FILE_APPEND);
        file_put_contents($ymalfilepath, "\t\tscrape_interval: ".$value['interval']."s\n",FILE_APPEND);
        file_put_contents($ymalfilepath, "\t\tstatic_configs:\n",FILE_APPEND);
        file_put_contents($ymalfilepath, "\t\t\t- targets: ['".$value['target']."']"."\n\n",FILE_APPEND);
            /*$entry =   array(
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
            
            array_push($outData, $entry);*/
        };

            /*$jsona = json_encode($outData);

            $yaml = Yaml::dump($outData,4,2);
            file_put_contents('D:\config.yaml', $yaml);*/
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

