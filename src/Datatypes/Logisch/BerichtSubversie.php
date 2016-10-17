<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class BerichtSubversie
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BerichtSubversie extends AbstractLogischInteger
{
    /**
     * @var string
     */
    private $beschrijving = 'Volgnummer binnen het versienummer van een (externe-integratie) berichtstandaard. Volgnummer van de formele uitgifte van een subversie van een (Externe Integratie) berichtstandaard.';
    /**
     * @var int
     */
    protected $maxInclusive = 99;
    /**
     * @var int
     */
    protected $minInclusive = 0;
}