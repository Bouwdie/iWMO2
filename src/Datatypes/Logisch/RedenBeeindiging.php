<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class RedenBeeindiging
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class RedenBeeindiging extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'De reden van een mutatie/beëindiging van de Wmo-ondersteuning bij cliënt.';
    /**
     * @var string
     */
    protected $enumeration = 'WMO588';
    /**
     * @var int
     */
    protected $maxLength = 2;

}