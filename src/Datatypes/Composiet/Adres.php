<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\Postcode;
use Hyperized\Iwmo2\Datatypes\Logisch\Straatnaam;
use Hyperized\Iwmo2\Datatypes\Logisch\Plaatsnaam;
use Hyperized\Iwmo2\Datatypes\Logisch\LandCode;


/**
 * Class Adres
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Adres
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'Gegevens voor de aanduiding van een adres.';

    /**
     * @var Huis|null
     * Optional
     */
    private $huis = null;
    /**
     * @var Postcode|null
     * Optional
     */
    private $postcode = null;
    /**
     * @var Straatnaam|null
     * Optional
     */
    private $straatnaam = null;
    /**
     * @var Plaatsnaam|null
     * Optional
     */
    private $plaatsnaam = null;
    /**
     * @var LandCode|null
     * Optional
     */
    private $landCode = null;

    /**
     * Adres constructor.
     * @param Huis|null $huis
     * @param Postcode|null $postcode
     * @param Straatnaam|null $straatnaam
     * @param Plaatsnaam|null $plaatsnaam
     * @param LandCode|null $landCode
     */
    public function __construct(
        Huis $huis = null,
        Postcode $postcode = null,
        Straatnaam $straatnaam = null,
        Plaatsnaam $plaatsnaam = null,
        LandCode $landCode = null
    ) {
        if(!is_null($huis)) {
            $this->huis = $huis;
        }
        if(!is_null($postcode)) {
            $this->postcode = $postcode;
        }
        if(!is_null($straatnaam)) {
            $this->straatnaam = $straatnaam;
        }
        if(!is_null($plaatsnaam)) {
            $this->plaatsnaam = $plaatsnaam;
        }
        if(!is_null($landCode)) {
            $this->landCode = $landCode;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $returnString = '';
        if(!is_null($this->straatnaam)) {
            $returnString .= $this->straatnaam.' ';
        }
        if(!is_null($this->huis)) {
            $returnString .= $this->huis;
        }
        if(!is_null($this->postcode)) {
            $returnString .= ', '.$this->postcode;
        }
        if(!is_null($this->plaatsnaam)) {
            $returnString .= ', '.$this->plaatsnaam;
        }
        if(!is_null($this->landCode)) {
            $returnString .= ', '.$this->landCode;
        }
        return $returnString;
    }
}