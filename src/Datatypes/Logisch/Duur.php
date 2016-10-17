<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Duur
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Duur extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschriiving = 'Code die aangeeft wat de verwachte duur is van de categorie beperking.';
    /**
     * @var string
     */
    protected $enumeration = 'COD749';
    /**
     * @var int
     */
    protected $maxLength = 1;
}