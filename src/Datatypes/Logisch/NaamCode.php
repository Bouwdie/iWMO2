<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class NaamCode
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class NaamCode extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Aanduiding naamgebruik (gecodeerd).';
    /**
     * @var int
     */
    protected $maxLength = 1;
    /**
     * @var string
     */
    protected $enumeration = 'COD700';
}