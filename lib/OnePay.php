<?php
namespace Transbank;


/** aqui deberia cargar todo los utils y la api en general */


/**
 * Class OnePay
 *
 * @package Transbank
*/
class OnePay 
{


    public static $appKey;
    public static $callbackUrl;

    public static $serverBasePath;
    public static $scriptPath;
    public static $apiKey;
    public static $sharedSecret;
    const INTEGRATION_TYPES = array("TEST" => "https://web2desa.test.transbank.cl", "LIVE" => "");

    private static $integrationType = "TEST";
    /**
     * Return the API key used for requests
     */
    
    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Sets the API key to use for requests
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
    /**
     * Return the app key used for requests
     */
    public static function getAppKey()
    {
        return self::$appKey;
    }
    /**
     * Set the app key used for requests
     */
    public static function setAppKey($appKey)
    {
        self::$appKey = $appKey;
    }
    /**
     * Return the callback url
     */
    public static function getCallbackUrl()
    {
        return self::$callbackUrl;
    }
    /**
     * Set the callback url
     */
    public static function setCallbackUrl($callbackUrl)
    {
        self::$callbackUrl = $callbackUrl;
    }
    /**
     * Return the callback url
     */
    public static function getSharedSecret()
    {
        return self::$sharedSecret;
    }
    /**
     * Set the callback url
     */
    public static function setSharedSecret($sharedSecret)
    {
        self::$sharedSecret = $sharedSecret;
    }

    public static function getCurrentIntegrationTypeUrl()
    {
        return self::INTEGRATION_TYPES[self::$integrationType];
    }

    public static function getIntegrationTypeUrl($type)
    {
        $url = self::INTEGRATION_TYPES[$type];
        if (!$url) {
            $integrationTypes = array_keys(self::INTEGRATION_TYPES);
            $integrationTypesAsString = join($integrationTypes, ", ");
            throw new \Exception('Invalid integration type, valid values are: ' . $integrationTypesAsString);
        }
        return $url;

    }

    public static function getIntegrationType()
    {
        return self::$integrationType;
    }

    public static function setIntegrationType($type)
    {
        if (!self::INTEGRATION_TYPES[$type]) {
            $integrationTypes = array_keys(self::INTEGRATION_TYPES);
            $integrationTypesAsString = join($integrationTypes, ", ");
            throw new \Exception('Invalid integration type, valid values are: ' . $integrationTypesAsString);
        }
        self::$integrationType = self::INTEGRATION_TYPES[$type];
    }
}