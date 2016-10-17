<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Postcode
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Postcode extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschrijving = 'Aanduiding van de (inter)nationale postcode. Dit veld is geschikt voor zowel de Nederlandse als niet-Nederlandse postcodes.';
    /**
     * @var int
     */
    protected $maxLength = 8;
}