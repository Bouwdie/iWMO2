<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class AgbCode
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class AgbCode extends AbstractLogischStringLengthPattern
{
    /**
     * @var string
     */
    private $beschrijving = 'Identificerende code van een instelling.';
    /**
     * @var int
     */
    protected $maxLength = 8;
    /**
     * @var string
     */
    protected $pattern = '[0-9]{8}';
}