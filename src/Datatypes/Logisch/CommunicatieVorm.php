<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class CommunicatieVorm
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class CommunicatieVorm extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Gecodeerde aanduiding van de bijzondere vorm van communicatie die gebruikt dient te worden.';
    /**
     * @var string
     */
    protected $enumeration = 'COD747';
    /**
     * @var int
     */
    protected $maxLength = 1;
}