<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;

/**
 * Class Taal
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Taal extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschrijving = 'De taal van de cliënt waarin met de cliënt wordt gecommuniceerd.';
    /**
     * @var int
     */
    protected $maxLength = 25;
}