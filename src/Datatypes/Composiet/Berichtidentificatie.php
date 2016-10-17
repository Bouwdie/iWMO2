<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\Datum;
use Hyperized\Iwmo2\Datatypes\Logisch\IdentificatieBericht;
use Hyperized\Iwmo2\Datatypes\Logisch\JaNee;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Berichtidentificatie
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Berichtidentificatie
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Naam of nummer en dagtekening ter identificatie van een totale aanlevering.';

    /**
     * @var IdentificatieBericht|null
     */
    private $identificatie = null;
    /**
     * @var Datum|null
     */
    private $dagtekening = null;
    /**
     * @var JaNee|null
     */
    private $tekenSet = null;

    /**
     * Berichtidentificatie constructor.
     * @param IdentificatieBericht $identificatie
     * @param Datum $dagtekening
     * @param JaNee $tekenSet
     */
    public function __construct(
        IdentificatieBericht $identificatie,
        Datum $dagtekening,
        JaNee $tekenSet
    ) {
        $this->identificatie = $identificatie;
        $this->dagtekening = $dagtekening;
        $this->tekenSet = $tekenSet;
    }
}