<?php

namespace Source\Model\Data;

use Automattic\WooCommerce\Client;
use Source\Model\Entities\Product;

class LoadProduct
{
    private static Client $client;

    private function __construct()
    {

    }

    public static function loadProduct($prodctAbastrcClass): ?Product
    {
        if ($prodctAbastrcClass){
            $product = new Product();

            $id = $prodctAbastrcClass->id;
            $name = $prodctAbastrcClass->name;
            $description = strip_tags($prodctAbastrcClass->description);
            $imagePath = $prodctAbastrcClass->images[0]->src;
            $linkProduct = $prodctAbastrcClass->permalink;

            $product->setId($id);
            $product->setName($name);
            $product->setDescription($description);
            $product->setImagePath($imagePath);
            $product->setLinkProduct($linkProduct);

            return $product;
        }

        return null;
    }

    public static function loadProducts(string $productsJson): ?array
    {
        $products = [];

        if ($productsJson){
            $json = json_decode($productsJson);

            foreach ( $json as $key => $pValue) {
                $product = self::loadProduct($pValue);
                $products[$key] = $product;
            }

            return $products;
        }

        return null;
    }

    public static function loadAll(): ?array
    {
        self::$client = ClientData::getInstance();

        $json = self::$client->get('products');
        $json = json_encode($json);

        $products = self::loadProducts($json);

        return $products;
    }
}