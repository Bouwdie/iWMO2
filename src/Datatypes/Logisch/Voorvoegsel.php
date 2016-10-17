<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Voorvoegsel
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Voorvoegsel extends AbstractLogischStringLength
{
    /**
     * @var string
     */
    private $beschrijving = 'Verzameling van een of meer voorzetsels/lidwoorden, die aan het significante deel van de achternaam van een persoon vooraf gaat en daar een onderdeel van is.';
    /**
     * @var int
     */
    protected $maxLength = 10;
}