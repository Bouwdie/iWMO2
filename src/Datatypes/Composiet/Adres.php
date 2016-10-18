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
    private $huis;
    /**
     * @var Postcode|null
     * Optional
     */
    private $postcode;
    /**
     * @var Straatnaam|null
     * Optional
     */
    private $straatnaam;
    /**
     * @var Plaatsnaam|null
     * Optional
     */
    private $plaatsnaam;
    /**
     * @var LandCode|null
     * Optional
     */
    private $landCode;

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
        if($huis !== null) {
            $this->huis = $huis;
        }
        if($postcode !== null) {
            $this->postcode = $postcode;
        }
        if($straatnaam !== null) {
            $this->straatnaam = $straatnaam;
        }
        if($plaatsnaam !== null) {
            $this->plaatsnaam = $plaatsnaam;
        }
        if($landCode !== null) {
            $this->landCode = $landCode;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $returnString = '';
        if($this->straatnaam !== null) {
            $returnString .= $this->straatnaam.' ';
        }
        if($this->huis !== null) {
            $returnString .= $this->huis;
        }
        if($this->postcode  !== null) {
            $returnString .= ', '.$this->postcode;
        }
        if($this->plaatsnaam !== null) {
            $returnString .= ', '.$this->plaatsnaam;
        }
        if($this->landCode !== null) {
            $returnString .= ', '.$this->landCode;
        }
        return $returnString;
    }
}