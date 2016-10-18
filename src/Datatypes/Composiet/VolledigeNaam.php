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
    private $geslachtsnaan = null;
    /**
     * @var Achternaam|null
     */
    private $partnernaam = null;
    /**
     * @var Voorletters|null
     */
    private $voorletters = null;
    /**
     * @var NaamCode|null
     */
    private $naamCode = null;

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
        if(!is_null($partnernaam)) {
            $this->partnernaam = $partnernaam;
        }
        if(!is_null($voorletters)) {
            $this->voorletters = $voorletters;
        }
        $this->naamCode = $naamCode;
    }
}