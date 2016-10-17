<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Plaatsnaam
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Plaatsnaam extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschijving = 'De door de gemeente vastgestelde naam van een woonplaats.';
    /**
     * @var int
     */
    protected $maxLength = 24;

}