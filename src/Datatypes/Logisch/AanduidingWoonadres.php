<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class AanduidingWoonadres
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class AanduidingWoonadres extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = "De aanduiding die wordt gebruikt voor adressen die niet zijn voorzien van de gebruikelijke straatnaam en huisnummeraanduidingen.";
    /**
     * @var string
     */
    protected $enumeration = 'NUM061';
    /**
     * @var int
     */
    protected $maxLength = 2;
}