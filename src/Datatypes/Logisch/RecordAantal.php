<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class RecordAantal
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class RecordAantal extends AbstractLogischInteger
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Het aantal detailrecords van een bepaald type in een bestand.';

    /**
     * @var int
     */
    protected $minInclusive = 0;
    /**
     * @var int
     */
    protected $maxInclusive = 999999;
}