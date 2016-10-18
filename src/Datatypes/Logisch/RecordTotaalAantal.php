<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class RecordTotaalAantal
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class RecordTotaalAantal extends AbstractLogischInteger
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Het totaal aantal detailrecords in het bestand.';
    /**
     * @var int
     */
    protected $maxInclusive = 9999999;
    /**
     * @var int
     */
    protected $minInclusive = 0;

}