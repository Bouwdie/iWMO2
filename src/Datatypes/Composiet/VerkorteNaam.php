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
    private $geslachtsNaam;
    /**
     * @var Voorletters|null
     * Optional
     */
    private $voorLetters;

    /**
     * VerkorteNaam constructor.
     * @param Achternaam $geslachtsNaam
     * @param Voorletters|null $voorLetters
     */
    public function __construct(
        Achternaam $geslachtsNaam,
        Voorletters $voorLetters = null
    ) {
        $this->geslachtsNaam = $geslachtsNaam;
        if($voorLetters !== null) {
            $this->voorLetters = $voorLetters;
        }
    }
}