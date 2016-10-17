<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class BeperkingScore
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BeperkingScore extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'Gecodeerde aanduiding van de score op een vraag over een beperking.';
    /**
     * @var string
     */
    protected $enumeration = 'COD828';
    /**
     * @var int
     */
    protected $maxLength = 1;
}