<?php 
namespace DotSquare\ApiOperations;

trait ApiRequestor {
    public static function post($dir, $data){
        if(is_array($data)) {
            $data=serialize($data);
            $apiKey = \DotSquare\DotSquare::getApiKey();
            $apiBase=\DotSquare\DotSquare::getApiBase();
            $apiVersion=\DotSquare\DotSquare::API_VERSION;

            $post = array('KEY'=>$apiKey, 'data'=>$data);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiBase."dotsquare/".$apiVersion."/api/".$dir);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            $response = curl_exec($ch);
            curl_close ($ch);
            if($response==false) {
                $response=array('success'=>false, 'http_code'=>500, 'message'=>'Sorry, Please try again later', 'data'=>array(), 'error'=>array('type'=>'api_connection_error', 'debug'=> 'Error Connecting to API'));
                $response=json_encode($response, JSON_FORCE_OBJECT);
            }
        } else {
           $response=array('success'=>false, 'http_code'=>500, 'message'=>'Sorry, Please try again later', 'data'=>array(), 'error'=>array('type'=>'invalid_request_error', 'debug'=>'Data Must be an Array')); 
           $response=json_encode($response, JSON_FORCE_OBJECT);
        }
        $response=json_decode($response);
        return $response;
    }
}