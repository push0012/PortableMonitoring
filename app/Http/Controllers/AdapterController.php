<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;

class AdapterController extends Controller
{
    public function index(Request $requests)
    {
        //return response()->json($requests, 200);

        $entry =   array(
            
            'wifis'=> 
            array(
                'wlan0'=> 
                array(
                    'dhcp4'=>true,
                    'optional' =>true,
                    'access-points'=> 
                    
                    array(
                        "home network" => 
                        array(
                            
                              'password'=> "123456789"  
                            
                            
                        )
                    
                    )
                    )
                )
            
                    );
            
        



        //$jsona = json_encode($outData);

        $yaml = Yaml::dump($entry,5,2);

        file_put_contents('D:\configure.yaml', $yaml);
        return response()->json("success", 200);
    }
}
/*wifis:
    wlan0:
    dhcp4: true
    optional: true
    access-points:
        "home network":
        password: "123456789";*/