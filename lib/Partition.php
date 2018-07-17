<?php 
namespace DotSquare;

class Partition {
    use ApiOperations\ApiRequestor;
    
    public static function createPartitionDirectory($data) {
        $dir='partition/createPartitionDirectory/';
        $response = \DotSquare\Partition::post($dir, $data);
        return $response;
    }
}
