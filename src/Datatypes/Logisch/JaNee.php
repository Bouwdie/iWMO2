<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class JaNee
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class JaNee extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Codering voor ja of nee.';
    /**
     * @var string
     */
    protected $enumeration = 'COD260';
    /**
     * @var int
     */
    protected $maxLength = 1;
}