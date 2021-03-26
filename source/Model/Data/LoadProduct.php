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

    public function loadProduct(string $prodctAbastrcClass): ?Product
    {
        if ($prodctAbastrcClass){
            $product = new Product();

            $id = $prodctAbastrcClass->id;
            $name = $prodctAbastrcClass->name;
            $description = strip_tags($prodctAbastrcClass->description);
            $imagePath = $prodctAbastrcClass->images[0]->src;

            $product->setId($id);
            $product->setName($name);
            $product->setDescription($description);
            $product->setImagePath($imagePath);

            return $product;
        }

        return null;
    }

    public function loadProducts(array $productsJson): ?array
    {
        $products = [];

        if ($productsJson){

            foreach (json_decode($productsJson) as $key => $pValue) {
                $product = $this->loadProduct($pValue);
                $products[$key] = $product;
            }

            return $products;
        }

        return null;
    }

    public function loadAll(): ?array
    {
        $json = $this->client->get('products');

        $products = $this->loadProducts($json);

        return null;
    }
}