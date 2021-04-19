<?php

namespace Source\Model\Data;

use Automattic\WooCommerce\Client;

class ClientData
{
    private const pathApi = __DIR__ . "/../../include/api.json";
    private static $host = "";
    private static $consumerKey = "";
    private static $consumerSecret = "";
    private static $options = [];
    private static $client = null;

    /**
     * @return string
     */
    public static function getHost()
    {
        return self::$host;
    }

    /**
     * @param $host
     */
    public static function setHost($host)
    {
        self::$host = $host;
    }

    /**
     * @return string
     */
    public static function getConsumerKey()
    {
        return self::$consumerKey;
    }

    /**
     * @param $consumerKey
     */
    public static function setConsumerKey($consumerKey)
    {
        self::$consumerKey = $consumerKey;
    }

    /**
     * @return string
     */
    public static function getConsumerSecret()
    {
        return self::$consumerSecret;
    }

    /**
     * @param $consumerSecret
     */
    public static function setConsumerSecret($consumerSecret)
    {
        self::$consumerSecret = $consumerSecret;
    }

    /**
     * @return array
     */
    public static function getOptions()
    {
        return self::$options;
    }

    /**
     * @param $options
     */
    public static function setOptions($options)
    {
        self::$options = $options;
    }

    public static function loadDocApi() {
        $file = fopen(self::pathApi, "r");
        $json = fread($file, filesize(self::pathApi));
        fclose($file);
        $data = json_decode($json, true);

        $site = site_url();

        self::loadClientData(
            $site,
            $data["consumerKey"],
            $data["consumerSecret"],
            $data["options"]
        );
    }

    public static function loadClientData($host, $consumerKey, $consumerSecret, $options)
    {
        self::setHost($host);
        self::setConsumerKey($consumerKey);
        self::setConsumerSecret($consumerSecret);
        self::setOptions($options);
    }

    public static function getInstance()
    {
        if(!self::$client){
            self::loadDocApi();

            self::$client = new Client(
                self::getHost(),
                self::getConsumerKey(),
                self::getConsumerSecret(),
                self::getOptions()
            );
        }

        return self::$client;
    }

    public static function url() {
        return site_url();
    }
}