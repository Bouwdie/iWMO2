<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Regelnummer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Regelnummer extends AbstractLogischInteger
{
    protected static $beschrijving = 'Uniek aanduiding van een regel vrije tekst.';
    protected $maxInclusive = 9999;
    protected $minInclusive = 0;
}