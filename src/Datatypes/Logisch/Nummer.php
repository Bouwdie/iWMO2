<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Nummer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Nummer extends AbstractLogischInteger
{
    /**
     * @var string
     */
    private $beschrijving = 'Nummer';
    /**
     * @var int
     */
    protected $maxInclusive = 999999999;
    /**
     * @var int
     */
    protected $minInclusive = 0;
}