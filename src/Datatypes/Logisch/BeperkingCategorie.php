<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class BeperkingCategorie
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BeperkingCategorie extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'anduiding over de categorie van de beperking.';
    /**
     * @var string
     */
    protected $enumeration = 'COD539';
    /**
     * @var int
     */
    protected $maxLength = 1;
}