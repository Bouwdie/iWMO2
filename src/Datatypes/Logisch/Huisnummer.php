<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Huisnummer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Huisnummer extends AbstractLogischInteger
{
    /**
     * @var string
     */
    protected static $beschrijving = "De numerieke aanduiding zoals de gemeente die aan het object heeft toegekend.";
    /**
     * @var int
     */
    protected $maxInclusive = 99999;
    /**
     * @var int
     */
    protected $minInclusive = 0;
}