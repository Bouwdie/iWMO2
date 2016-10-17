<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\Huisnummer;
use Hyperized\Iwmo2\Datatypes\Logisch\Huisletter;
use Hyperized\Iwmo2\Datatypes\Logisch\HuisnummerToevoeging;
use Hyperized\Iwmo2\Datatypes\Logisch\AanduidingWoonadres;

/**
 * Class Huis
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Huis
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Aanduiding van een specifiek huis in een straat, onderdeel van het adres.';
    /**
     * @var Huisnummer
     */
    private $huisnummer;
    /**
     * @var Huisletter
     * Optional
     */
    private $huisletter;
    /**
     * @var HuisnummerToevoeging
     * Optional
     */
    private $huisnummerToevoeging;
    /**
     * @var AanduidingWoonadres
     * Optional
     */
    private $aanduidingWoonadres;

    /**
     * Huis constructor.
     * @param Huisnummer $huisnummer
     * @param Huisletter|null $huisletter
     * @param HuisnummerToevoeging|null $huisnummertoevoeging
     * @param AanduidingWoonadres|null $aanduidingWoonadres
     */
    public function __construct(
        Huisnummer $huisnummer,
        Huisletter $huisletter = null,
        HuisnummerToevoeging $huisnummertoevoeging = null,
        AanduidingWoonadres $aanduidingWoonadres = null
    ) {
        $this->huisnummer = $huisnummer;
        if(!is_null($huisletter)){
            $this->huisletter = $huisletter;
        }
        if(!is_null($huisnummertoevoeging)) {
            $this->huisnummerToevoeging = $huisnummertoevoeging;
        }
        if(!is_null($aanduidingWoonadres)) {
            $this->aanduidingWoonadres = $aanduidingWoonadres;
        }
    }

    /**
     * @return int|string
     */
    public function __toString()
    {
        $returnString = $this->huisnummer;
        if(!is_null($this->huisletter)) {
            $returnString .= $this->huisletter;
        }
        if(!is_null($this->huisnummerToevoeging)) {
            $returnString .= ' '.$this->huisnummerToevoeging;
        }
        if(!is_null($this->aanduidingWoonadres)) {
            $returnString .= ' '.$this->aanduidingWoonadres.'';
        }
        return $returnString;
    }
}