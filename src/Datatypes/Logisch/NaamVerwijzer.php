<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class NaamVerwijzer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class NaamVerwijzer extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Naam of organisatienaam van de persoon of instantie die de cliënt heeft doorverwezen naar ondersteuning.';
    /**
     * @var int
     */
    protected $maxLength = 64;
}