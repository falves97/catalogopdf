<?php


namespace Source\Model\Data;


class MakeCatalogo
{
    private string $catalogoPath;

    /**
     * MakeCatalogo constructor.
     * @param string $catalogoPath
     */
    public function __construct(string $catalogoPath)
    {
        $this->catalogoPath = $catalogoPath;
    }

    /**
     * @return string
     */
    public function getCatalogoPath(): string
    {
        return $this->catalogoPath;
    }

    /**
     * @param string $catalogoPath
     */
    public function setCatalogoPath(string $catalogoPath): void
    {
        $this->catalogoPath = $catalogoPath;
    }

    public function make(string $template): bool
    {

    }
}