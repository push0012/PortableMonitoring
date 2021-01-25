<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdapterController extends Controller
{
    public function index(Request $requests)
    {  
        try {
        $receive = json_decode($requests->getContent());
        
        /*$parameter = json_decode($requests->getContent());
        
        $para = "WiFiMe";*/
       $command = 'sudo nmcli dev wifi connect '.$receive->ssid.' password '.$receive->password;
       //$var = shell_exec($command); //uncomment this line and comment below line before run in raspberry board
        file_put_contents('D:\config.yaml', $command);
        
            return response()->json("Successfully Connected", 200);
        } catch (Exception $e) {
            return response()->json("Connection Failed", 500);
        }
    }
    public function restart()
    {  
        try {
       $command = 'sudo systemctl restart prometheus';
       //$var = shell_exec($command); //uncomment this line and comment below line before run in raspberry board
        file_put_contents('D:\config.yaml', $command);
        
            return response()->json("Successfully Restarted", 200);
        } catch (Exception $e) {
            return response()->json("Connection Failed", 500);
        }
    }
}

