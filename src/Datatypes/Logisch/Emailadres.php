<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Emailadres
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Emailadres extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschrijving = 'Het adres waaronder de cliënt/relatie cliënt via het internet per elektronische post te bereiken is.';
    /**
     * @var int
     */
    protected $maxLength = 70;
}