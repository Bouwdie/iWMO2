<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class HuisnummerToevoeging
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class HuisnummerToevoeging extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    protected static $beschrijving = "Die letters of tekens die noodzakelijk zijn om, naast huisnummer en -letter, de brievenbus te vinden.";
    /**
     * @var int
     */
    protected $maxLength = 4;
}