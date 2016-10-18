<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class BurgelijkeStaat
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BurgelijkeStaat extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Unieke aanduiding die de rechtspositie van een cliënt al dan niet in relatie tot één of meer personen beschrijft.';
    /**
     * @var string
     */
    protected $enumeration = 'COD366';
    /**
     * @var int
     */
    protected $maxLength = 1;
}