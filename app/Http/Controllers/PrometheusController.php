<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;

class PrometheusController extends Controller
{
    public function index()
    {
        
                  /* [ 'crape_interval' => '5s',
                        'static_configs'=> [
                            'targets'=> 'thehell'
                        ]
                    ]
                ];*/

/*
        $addr = array(
            "job_name" => "node exporter metrics",
            "family"=> "Dumars",
            "address"=> array(
                "lines"=> "458 Walkman Dr.
                Suite #292",
                "city"=> "Royal Oak",
                "state"=> "MI",
                "postal"=> 48046,
              ),
          );
*/

           /* $array = array(
                "products"=>
                array (
                    array(
                        'job_name'=> 'node exporter metrics'  
                    )
                )
            );

            $yaml = Yaml::dump($array,4,4);
            file_put_contents('config.yaml', $yaml, FILE_APPEND);
         */
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