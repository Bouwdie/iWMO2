<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Telefoonnummer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Telefoonnummer extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = "Het telefoonnummer waarop de cliënt of relatie van de cliënt te bereiken is.";
    /**
     * @var int
     */
    protected $maxLength = 15;
}