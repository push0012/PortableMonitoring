<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;

class PrometheusController extends Controller
{
    public function index()
    {
        
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
        $inData = array (
            ["foo"=>'node_exporter_metrics',"bar"=>"123456"],
            ["foo"=>'node_exporter_metrics_2',"bar"=>"654321"],
            );


        $json = array ();
        $outData = array ();
        
        foreach ($inData as &$value) {
            $entry = array (
                'job_name' => $value['foo'],
                "scrape_interval" => '5s',
                "static_configs" =>
                [
                    0 =>
                    [
                        'targets' =>
                        [
                            0 => $value['bar'],
                        ]
                    ]
                ]            
            );
            
            array_push($outData, $entry);
        }
                    ;
            $yaml = Yaml::dump($outData,3);
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