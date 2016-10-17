<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class CizCode
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class CizCode extends AbstractLogischInteger
{
    /**
     * @var string
     */
    private $beschrijving = 'Identificatie van het indicatieorgaan dat de indicatiestelling heeft verricht.';
    /**
     * @var int
     */
    protected $maxInclusive =-9999;
    /**
     * @var int
     */
    protected $minInclusive = 0;
}