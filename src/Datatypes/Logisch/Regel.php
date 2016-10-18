<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Regel
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Regel extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Vrije tekst (bijvoorbeeld een toelichting) in een bericht.';
    /**
     * @var int
     */
    protected $maxLength = 140;
}