<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Huisletter
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Huisletter extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschrijving = "Een alfabetisch teken achter het huisnummer zoals dit door het gemeentebestuur is toegekend.";
    /**
     * @var int
     */
    protected $maxLength = 1;
}