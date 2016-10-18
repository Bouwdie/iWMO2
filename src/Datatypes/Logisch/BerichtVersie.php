<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class BerichtVersie
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BerichtVersie extends AbstractLogischInteger
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Volgnummer van de formele uitgifte van een versie van een (externe-integratie)berichtstandaard.';
    /**
     * @var int
     */
    protected $maxInclusive = 99;
    /**
     * @var int
     */
    protected $minInclusive = 0;
}