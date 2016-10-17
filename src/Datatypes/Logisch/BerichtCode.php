<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class BerichtCode
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BerichtCode extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'Code ter identificatie van een soort bericht.';
    /**
     * @var string
     */
    protected $enumeration = 'COD002';
    /**
     * @var int
     */
    protected $maxLength = 3;
}