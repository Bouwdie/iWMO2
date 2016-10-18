<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class JuridischeStatus
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class JuridischeStatus extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Juridische situatie die voor de cliënt van toepassing is op het moment van indicatiestelling.';
    /**
     * @var string
     */
    protected $enumeration = 'COD232';
    /**
     * @var int
     */
    protected $maxLength = 2;
}