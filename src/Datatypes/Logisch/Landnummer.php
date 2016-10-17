<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Landnummer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Landnummer extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschrijving = 'Het telefoonnummer van een land, vanuit Nederland benaderd.';
    /**
     * @var int
     */
    protected $maxLength = 4;
}