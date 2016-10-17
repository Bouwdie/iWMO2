<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class ProductCode
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class ProductCode extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschrijving = 'Gecodeerde aanduiding van producten in het kader van de Wet maatschappelijke ondersteuning (Wmo).';
    /**
     * @var int
     */
    protected $maxLength = 5;
}