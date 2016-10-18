<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class BurgerServicenummer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BurgerServicenummer extends AbstractLogischStringLengthPattern
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Een door de overheid toegekend identificerend nummer in het kader van het vereenvoudigen van het contact tussen overheid en burgers en het verminderen van de administratieve lasten.';
    /**
     * @var int
     */
    protected $maxLength = 9;
    /**
     * @var string
     */
    // protected $pattern = '0{8})|98((00000[1-9])|(0000[1-9][0-9])|(000[1-9][0-9]{2})|(00[1-9][0-9]{3})|(0[1-9][0-9]{4})|([1-9][0-9]{5}))';
    protected $pattern = '[0-9]{9}';
}