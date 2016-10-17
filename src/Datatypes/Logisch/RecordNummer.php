<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class RecordNummer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class RecordNummer extends AbstractLogischInteger
{
    /**
     * @var string
     */
    private $beschrijving = 'Unieke codering van een detailrecord.';
    /**
     * @var int
     */
    protected $minInclusive = 0;
    /**
     * @var int
     */
    protected $maxInclusive = 999999999999;
}