<?php


namespace Source\Model\Data;

use Automattic\WooCommerce\Client;

class ClientData
{
    private static string $host = "";
    private static string $consumerKey = "";
    private static string $consumerSecret = "";
    private static array $options = [];
    private static $client = null;

    /**
     * @return string
     */
    public static function getHost(): string
    {
        return self::$host;
    }

    /**
     * @param string $host
     */
    public static function setHost(string $host): void
    {
        self::$host = $host;
    }

    /**
     * @return string
     */
    public static function getConsumerKey(): string
    {
        return self::$consumerKey;
    }

    /**
     * @param string $consumerKey
     */
    public static function setConsumerKey(string $consumerKey): void
    {
        self::$consumerKey = $consumerKey;
    }

    /**
     * @return string
     */
    public static function getConsumerSecret(): string
    {
        return self::$consumerSecret;
    }

    /**
     * @param string $consumerSecret
     */
    public static function setConsumerSecret(string $consumerSecret): void
    {
        self::$consumerSecret = $consumerSecret;
    }

    /**
     * @return array
     */
    public static function getOptions(): array
    {
        return self::$options;
    }

    /**
     * @param array $options
     */
    public static function setOptions(array $options): void
    {
        self::$options = $options;
    }

    public static function clientLoad(string $host, string $consumerKey, string $consumerSecret, array $options)
    {
        self::setHost($host);
        self::setConsumerKey($consumerKey);
        self::setConsumerSecret($consumerSecret);
        self::setOptions($options);
    }

    public static function getInstance(): ?Client
    {
        if(!self::$client){
            $file_name = __DIR__ . "/../../include/api.json";
            $file = fopen($file_name, "r");
            $json = fread($file, filesize($file_name));
            fclose($file);
            $data = json_decode($json);
            
            var_dump($data);

            self::$client = new Client(
                $data->host,
                $data->consumerKey,
                $data->consumerSecret,
                $data->options->version
            );
        }

        return self::$client;
    }
}