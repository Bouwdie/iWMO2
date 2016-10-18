<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class OrganisatieNaam
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class OrganisatieNaam extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = 'De naam van een organisatie waar de cliënt of relatie cliënt verblijft.';
    /**
     * @var int
     */
    protected $maxLength = 35;
}