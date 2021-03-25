<?php

namespace Source\Model\Data;

use Automattic\WooCommerce\Client;
use Source\Model\Entities\Product;

class LoadProduct
{
    private Client $client;
    private string $consumerKey;
    private string $consumerSecret;

    /**
     * LoadProduct constructor.
     * @param string $consumerKey
     * @param string $consumerSecret
     */
    public function __construct(string $consumerKey, string $consumerSecret)
    {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
    }

    public function loadProduct(string $prodctJson): ?Product
    {

    }

    public function loadProducts(array $products): ?array
    {

    }

    public function loadAll(): ?array
    {

    }
}