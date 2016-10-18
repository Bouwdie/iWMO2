<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;

/**
 * Class Straatnaam
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Straatnaam extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = 'De officiële door de gemeente vastgestelde naam van een straat.';
    /**
     * @var int
     */
    protected $maxLength = 24;
}