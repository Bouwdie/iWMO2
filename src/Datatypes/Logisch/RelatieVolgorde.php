<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class RelatieVolgorde
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class RelatieVolgorde extends AbstractLogischInteger
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Aanduiding van de prioriteit van de contactpersoon.';
    /**
     * @var int
     */
    protected $maxInclusive = 99;
    /**
     * @var int
     */
    protected $minInclusive = 0;
}