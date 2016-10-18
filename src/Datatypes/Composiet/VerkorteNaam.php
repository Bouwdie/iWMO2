<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\Voorletters;

/**
 * Class VerkorteNaam
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class VerkorteNaam
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'De achternaam van een natuurlijk persoon, aangeduid als Naam en Voorvoegsel.';
    /**
     * @var \Hyperized\Iwmo2\Datatypes\Composiet\Achternaam|null
     */
    private $gelachtsNaam = null;
    /**
     * @var Voorletters|null
     * Optional
     */
    private $voorLetters = null;

    /**
     * VerkorteNaam constructor.
     * @param Achternaam $gelachtsNaam
     * @param Voorletters|null $voorLetters
     */
    public function __construct(
        Achternaam $gelachtsNaam,
        Voorletters $voorLetters = null
    ) {
        $this->gelachtsNaam = $gelachtsNaam;
        if(!is_null($voorLetters)) {
            $this->voorLetters = $voorLetters;
        }
    }
}