<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\Voorletters;
use Hyperized\Iwmo2\Datatypes\Logisch\NaamCode;

/**
 * Class VolledigeNaam
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class VolledigeNaam
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'Volledige naam van een natuurlijk persoon, aangeduid als Voorletters, Geslachtsnaam en Partnernaam en een NaamCode die het naamgebruik aangeeft.';

    /**
     * @var Achternaam|null
     */
    private $geslachtsnaan;
    /**
     * @var Achternaam|null
     */
    private $partnernaam;
    /**
     * @var Voorletters|null
     */
    private $voorletters;
    /**
     * @var NaamCode|null
     */
    private $naamCode;

    /**
     * VolledigeNaam constructor.
     * @param Achternaam $geslachtsnaan
     * @param Achternaam|null $partnernaam
     * @param Voorletters|null $voorletters
     * @param NaamCode $naamCode
     */
    public function __construct(
        Achternaam $geslachtsnaan,
        Achternaam $partnernaam = null,
        Voorletters $voorletters = null,
        NaamCode $naamCode)
    {
        $this->geslachtsnaan = $geslachtsnaan;
        if($partnernaam !== null) {
            $this->partnernaam = $partnernaam;
        }
        if($voorletters !== null) {
            $this->voorletters = $voorletters;
        }
        $this->naamCode = $naamCode;
    }
}