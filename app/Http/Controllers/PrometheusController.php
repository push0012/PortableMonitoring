<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;

class PrometheusController extends Controller
{
    public function index()
    {
        
        $array =   [ 'crape_interval' => '5s',
                        'static_configs'=> [
                            'targets'=> 'thehell'
                        ]
                    ];

            $yaml = Yaml::dump($array,4,4);
            file_put_contents('config.yaml', $yaml, FILE_APPEND);/*
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