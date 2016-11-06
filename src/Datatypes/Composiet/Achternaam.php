<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\Naam;
use Hyperized\Iwmo2\Datatypes\Logisch\Voorvoegsel;
use Hyperized\Iwmo2\Datatypes\Logisch\NaamCode;

/**
 * Class Achternaam
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Achternaam
{
    use Meta;
    /**
     * @var string
     */
    protected static $beschrijving = 'De achternaam van een natuurlijk persoon, aangeduid als Naam met Voorvoegsel en een NaamCode die het naamgebruik aangeeft.';

    /**
     * @var Naam|null
     */
    private $naam;
    /**
     * @var Voorvoegsel|null
     * Optional
     */
    private $voorvoegsel;
    /**
     * @var NaamCode|null
     */
    private $naamCode;

    /**
     * Achternaam constructor.
     * @param Naam $naam
     * @param Voorvoegsel|null $voorvoegsel
     * @param NaamCode $naamCode
     */
    public function __construct(
        Naam $naam,
        Voorvoegsel $voorvoegsel = null,
        NaamCode $naamCode
    ) {
        $this->naam = $naam;
        if ($voorvoegsel !== null) {
            $this->voorvoegsel = $voorvoegsel;
        }
        $this->naamCode = $naamCode;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if ($this->voorvoegsel !== null) {
            return $this->voorvoegsel->getValue()->getValue() . ' ' . $this->naam->getValue()->getValue();
        }
        return $this->naam->getValue()->getValue();
    }
}