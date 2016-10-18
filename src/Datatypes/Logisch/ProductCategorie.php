<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class ProductCategorie
 * Said to be 'integer' (https://modellen.istandaarden.nl/wmo/index.php/LDT/ProductCategorie), but really its a string
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class ProductCategorie extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Gecodeerde aanduiding van hoofdcategorieën van producten in het kader van de Wet maatschappelijke ondersteuning (Wmo).';

    /**
     * @var int
     */
    protected $maxLength = 99;

    /**
     * @var string
     */
    protected $enumeration = 'WMO020';

}