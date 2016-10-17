<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class DatumGebruik
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class DatumGebruik extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'Indicator die aangeeft welk deel van de voorafgaande datum gebruikt mag worden.';
    /**
     * @var string
     */
    protected $enumeration = 'COD170';
    /**
     * @var int
     */
    protected $maxLength = 1;
}