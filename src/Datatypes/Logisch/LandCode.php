<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class LandCode
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class LandCode extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'Identificatie van een (historisch/actueel) land of gebiedsdeel.';
    /**
     * @var string
     */
    protected $enumeration = 'COD032';
    /**
     * @var int
     */
    protected $maxLength = 2;
}