<?php

namespace Source\Model\Entities;

class Product {
    private int $id;
    private string $name;
    private string $description;
    private string $imagePath;
    private string $linkProduct;

    /**
     * @return string
     */
    public function getLinkProduct(): string
    {
        return $this->linkProduct;
    }

    /**
     * @param string $linkProduct
     */
    public function setLinkProduct(string $linkProduct): void
    {
        $this->linkProduct = $linkProduct;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    /**
     * @param string $imagePath
     */
    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }
}