<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Gemeente
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Gemeente extends AbstractLogischInteger
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Identificatie van een gemeente die betrokken is bij de uitvoering van de Wet maatschappelijke ondersteuning (Wmo).';
    /**
     * @var int
     */
    protected $maxInclusive = 9999;
    /**
     * @var int
     */
    protected $minInclusive = 0;
}