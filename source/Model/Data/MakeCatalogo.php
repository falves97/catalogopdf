<?php


namespace Source\Model\Data;


class MakeCatalogo
{
    private $template;
    private $modelo;

    /**
     * MakeCatalogo constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template): void
    {
        $this->template = $template;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }



    public function makeProduct($product) {
        $model = $this->getModelo();
        $model = str_replace("::pathImg::", $product->getImagePath(), $model);
        $model = str_replace("::name::", $product->getName(), $model);
        $model = str_replace("::description::", $product->getDescription(), $model);
        $model = str_replace("::linkProduct::", $product->getLinkProduct(), $model);

        return $model;
    }

    public function make()
    {
        $products = LoadProduct::loadAll();

        $model = "";

        for ($i = 0; $i < count($products); $i++) {
            $model = $model . $this->makeProduct($products[$i]);
        }

        $template = $this->template;
        $template = str_replace("::modelo::", $model, $template);

        return $template;
    }
}