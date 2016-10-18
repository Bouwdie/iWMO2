<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Geslacht
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Geslacht extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'De sekse van een persoon, zoals bij geboorte formeel vastgesteld of nadien formeel gewijzigd.';
    /**
     * @var string
     */
    protected $enumeration = 'COD046';
    /**
     * @var int
     */
    protected $maxLength = 1;
}