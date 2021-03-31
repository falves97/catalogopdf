<?php


namespace Source\Controller;

use Source\Model\Data\LoadProduct;
use Source\Model\Entities\Product;

class LoadProductController
{
    private string $template;
    private LoadProduct $loadProduc;

    /**
     * LoadProductController constructor.
     * @param string $template
     */
    public function __construct(string $template)
    {
        $this->template = $template;
        $this->loadProduc = new LoadProduct();
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

    public function makeProductTemplate(Product $product): ?string
    {
        return null;
    }

    public function makeTemplate(): bool
    {
        return false;
    }
}