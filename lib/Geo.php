<?php 
namespace DotSquare;

class Geo {
    use ApiOperations\ApiRequestor;

    public static function getUSTimeZone($data) {
        $dir='geo/getUSTimeZone/';
        $response = \DotSquare\Geo::post($dir, $data);
        return $response;
    }
    public static function getUSZipData($data) {
        $dir='geo/getUSZipData/';
        $response = \DotSquare\Geo::post($dir, $data);
        return $response;
    }
    public static function getIpData($data) {
        $dir='geo/getIpData/';
        $response = \DotSquare\Geo::post($dir, $data);
        return $response;
    }
}