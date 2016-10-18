<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Eenheid
 * Is really a String, not an Integer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Eenheid extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Aanduiding van de eenheid waarin de Omvang van een ondersteuningsproduct is beschreven.';
    /**
     * @var string
     */
    protected $enumeration = 'WMO756';
    /**
     * @var int
     */
    protected $maxLength = 99;
}