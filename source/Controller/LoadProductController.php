<?php


namespace Source\Controller;

use Source\Model\Entities\Product;

class LoadProductController
{
    private string $template;

    /**
     * LoadProductController constructor.
     * @param string $template
     */
    public function __construct(string $template)
    {
        $this->template = $template;
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