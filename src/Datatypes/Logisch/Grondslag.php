<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Grondslag
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Grondslag extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Gecodeerde aanduiding wat ten grondslag ligt aan het beschikking met betrekking tot de ondersteuning voor een cliënt.';
    /**
     * @var string
     */
    protected $enumeration = 'COD736';
    /**
     * @var int
     */
    protected $maxLength = 2;
}