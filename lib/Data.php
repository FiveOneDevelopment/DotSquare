<?php 
namespace DotSquare;

class Data {
    use ApiOperations\ApiRequestor;

    public static function getEditModeData($data) {
        $dir='data/getEditModeData/';
        $response = \DotSquare\Data::post($dir, $data);
        return $response;
    }
    public static function getSocialData($data) {
        $dir='data/getSocialData/';
        $response = \DotSquare\Data::post($dir, $data);
        return $response;
    }
    public static function getFieldsData($data) {
        $dir='data/getFieldsData/';
        $response = \DotSquare\Data::post($dir, $data);
        return $response;
    }
}