<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class BeperkingVraag
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BeperkingVraag extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Gecodeerde aanduiding van de vraag over beperking.';
    /**
     * @var string
     */
    protected $enumeration = 'COD825';
    /**
     * @var int
     */
    protected $maxLength = 4;
}