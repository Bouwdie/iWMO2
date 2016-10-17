<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class SoortRelatie
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class SoortRelatie extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'De soort relatie die een persoon ten opzichte van de cliënt heeft.';

    /**
     * @var int
     */
    protected $maxLength = 2;
    /**
     * @var string
     */
    protected $enumeration = 'COD472';
}