<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class RedenIntrekking
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class RedenIntrekking extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'De reden waarom een toewijzing wordt ingetrokken.';
    /**
     * @var int
     */
    protected $maxLength = 1;
    /**
     * @var string
     */
    protected $enumeration = 'COD172';
}