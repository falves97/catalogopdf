<?php


namespace Source\Controller;

use Source\Model\Data\MakeCatalogo;


class LoadProductController
{


    /**
     * LoadProductController constructor.
     */
    public function __construct()
    {
    }

    public function makeTemplate()
    {
        $make = new MakeCatalogo();

        $template = file_get_contents(__DIR__ . '/../View/html/template.html');
        $modelo = file_get_contents(__DIR__ . '/../View/html/modelo-02.html');

        $make->setTemplate($template);
        $make->setModelo($modelo);

        return $make->make();
    }
}