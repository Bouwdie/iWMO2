<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class IdentificatieBericht
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class IdentificatieBericht extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Naam of nummer, die ter identificatie aan een totale aanlevering kan worden meegegeven.';
    /**
     * @var int
     */
    protected $maxLength = 12;
}