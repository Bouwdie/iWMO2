<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Persoonsid
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Persoonsid extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Indentificerend nummer van een natuurlijk persoon.';
    /**
     * @var int
     */
    protected $maxLength = 20;
}