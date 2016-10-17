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
    private $beschrijving = 'Indentificerend nummer van een natuurlijk persoon.';
    /**
     * @var int
     */
    protected $maxLength = 20;
}