<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Voorletters
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Voorletters extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschrijving = 'De verzameling van letters die wordt gevormd door de eerste letter van alle in volgorde voorkomende voornamen van een persoon.';
    /**
     * @var int
     */
    protected $maxLength = 6;
}