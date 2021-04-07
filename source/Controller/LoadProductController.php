<?php


namespace Source\Controller;

use Source\Model\Data\LoadProduct;
use Source\Model\Entities\Product;

class LoadProductController
{
    private string $template;
    private string $modelo;

    /**
     * LoadProductController constructor.
     * @param string $template
     */
    public function __construct($template, $modelo)
    {
        $this->template = $template;
        $this->modelo = $modelo;
    }

    /**
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     */
    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    public function makeProductTemplate(Product $product): string
    {
        $model = $this->modelo;
        $model = str_replace("::pathImg::", $product->getImagePath(), $model);
        $model = str_replace("::name::", $product->getName(), $model);
        $model = str_replace("::description::", $product->getDescription(), $model);
        $model = str_replace("::linkProduct::", $product->getLinkProduct(), $model);

        return $model;
    }

    public function makeTemplate(): ?string
    {
        $products = LoadProduct::loadAll();

        $model = "";

        for ($i = 0; $i < count($products); $i++) {
            $model = $model . $this->makeProductTemplate($products[$i]);
        }

        $template = $this->template;
        $template = str_replace("::modelo::", $model, $template);

        return $template;
    }
}