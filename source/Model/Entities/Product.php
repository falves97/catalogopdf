<?php

namespace Source\Model\Entities;

class Product {
    private $id;
    private $name;
    private $description;
    private $imagePath;
    private $linkProduct;

    /**
     * @return string
     */
    public function getLinkProduct()
    {
        return $this->linkProduct;
    }

    /**
     * @param $linkProduct
     */
    public function setLinkProduct($linkProduct)
    {
        $this->linkProduct = $linkProduct;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * @param $imagePath
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }
}