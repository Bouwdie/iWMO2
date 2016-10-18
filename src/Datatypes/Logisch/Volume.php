<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Volume
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Volume extends AbstractLogischInteger
{

    /**
     * @var string
     */
    protected static $beschrijving = 'Aanduiding van de mate van ondersteuning betreffende een product, onderdeel van de Omvang.';

    /**
     * @var int
     */
    protected $minInclusive = 0;
    /**
     * @var int
     */
    protected $maxInclusive = 99999999;

}