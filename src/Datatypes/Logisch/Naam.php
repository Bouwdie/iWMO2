<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Naam
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Naam extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = 'De achternaam van een persoon, indien nodig verkort weergegeven.';
    /**
     * @var int
     */
    protected $maxLength = 25;
}