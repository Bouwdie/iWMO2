<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class TypeVerwijzer
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class TypeVerwijzer extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = "Het telefoonnummer waarop de cliënt of relatie van de cliënt te bereiken is.";
    /**
     * @var string
     */
    protected $enumeration = 'COD327';
    /**
     * @var int
     */
    protected $maxLength = 2;

}