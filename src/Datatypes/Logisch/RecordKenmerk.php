<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class RecordKenmerk
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class RecordKenmerk extends AbstractLogischInteger
{
    /**
     * @var string
     */
    private $beschrijving = 'Identificatie van het soort record in een externe-integratiebericht.';
    /**
     * @var int
     */
    protected $minInclusive = 0;
    /**
     * @var int
     */
    protected $maxInclusive = 99;
}