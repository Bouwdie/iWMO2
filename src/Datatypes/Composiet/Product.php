<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\ProductCategorie;
use Hyperized\Iwmo2\Datatypes\Logisch\ProductCode;

/**
 * Class Product
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Product
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Gecodeerde omschrijving van een product, dienst of resultaat ten behoeve van het leveren van ondersteuning aan een cliënt.';
    /**
     * @var ProductCategorie|null
     */
    private $categorie = null;
    /**
     * @var ProductCode|null
     * Optional
     */
    private $code = null;

    /**
     * Product constructor.
     * @param ProductCategorie $categorie
     * @param ProductCode|null $code
     */
    public function __construct(
        ProductCategorie $categorie,
        ProductCode $code = null
    ) {
        $this->categorie = $categorie;
        if(!is_null($code)) {
            $this->code = $code;
        }
    }
}