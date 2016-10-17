<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Leefeenheid
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Leefeenheid extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'Gecodeerde aanduiding van de leefsituatie van een cliënt.';
    /**
     * @var int
     */
    protected $maxLength = 1;
    /**
     * @var string
     */
    protected $enumeration = 'COD478';
}