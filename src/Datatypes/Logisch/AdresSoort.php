<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class AdresSoort
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class AdresSoort extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'Nadere typering van het adres.';
    /**
     * @var string
     */
    protected $enumeration = 'COD757';
    /**
     * @var int
     */
    protected $maxLength = 2;
}