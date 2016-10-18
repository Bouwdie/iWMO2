<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Frequentie
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Frequentie extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Aanduiding van de frequentie waarmee een ondersteuningsproduct geleverd wordt, onderdeel van de Omvang.';
    /**
     * @var int
     */
    protected $maxLength = 1;
    /**
     * @var string
     */
    protected $enumeration = 'WMO757';
}