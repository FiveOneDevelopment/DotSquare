<?php 
namespace DotSquare;

class Initialize {
    use ApiOperations\ApiRequestor;

    public static function connect($data) {
        $dir='init/getCredentials/';

        \DotSquare\DotSquare::setApiKey($data);
        $data=array('key'=>$data);
        $response = \DotSquare\Initialize::post($dir, $data);
        return $response;
    }
}