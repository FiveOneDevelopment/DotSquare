<?php 
namespace DotSquare;

class DotSquare {

    const API_VERSION = '6.6.0';
    // @var string The DotSquare API key to be used for requests.
    public static $apiKey;

    // @var string The base URL for the DotSquare API.
    public static $apiBase = 'https://cms.fiveonedevelopment.com';

    // @var string The Partition ID for the DotSquare API.
    public static $apiPartitionId = 1;  

    /**
     * @return string The API Base used for requests.
     */
    public static function getApiPartition()
    {
        return self::$apiPartitionId;
    }
    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public static function setApiPartition($apiPartitionId)
    {
        self::$apiPartitionId = $apiPartitionId;
    }
    /**
     * @return string The API Base used for requests.
     */
    public static function getApiBase()
    {
        return self::$apiBase;
    }
    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public static function setApiBase($apiBase)
    {
        self::$apiBase = $apiBase;
    }
    /**
     * @return string The API key used for requests.
     */
    public static function getApiKey()
    {
        return self::$apiKey;
    }
    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
}