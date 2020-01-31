<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;

class PrometheusController extends Controller
{
    public function index()
    {
        $array = [
            'job_name'=> 'node exporter metrics',
                ['scrape_interval' => '5s',
                    ['static_configs'=>[
                        'targets'=> 'thehell'
                    ]
                ]
                ]     
        ];

           
            $yaml = Yaml::dump($array);
            file_put_contents('config.yaml', $yaml."\n", FILE_APPEND);

                
    }
}

/*datasources:
  - name: gdev-graphite
    type: graphite
    access: proxy
    url: http://localhost:8180
    jsonData:
      graphiteVersion: "1.1"

      FILE_APPEND
- job_name: 'node_exporter_metrics'
    scrape_interval: 5s
        static_configs:
        - targets: ['172.16.155.60:9100']*/