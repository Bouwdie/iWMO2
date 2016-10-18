<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\Datum;
use Hyperized\Iwmo2\Datatypes\Logisch\DatumGebruik;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Geboortedatum
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Geboortedatum
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'Datum waarop een natuurlijk persoon geboren is.';
    /**
     * @var Datum|null
     */
    private $datum;
    /**
     * @var DatumGebruik|null
     * Optional
     */
    private $datumGebruik;

    /**
     * Geboortedatum constructor.
     * @param Datum $datum
     * @param DatumGebruik|null $datumGebruik
     */
    public function __construct(
        Datum $datum,
        DatumGebruik $datumGebruik = null
    ) {
        $this->datum = $datum;
        if($datumGebruik !== null) {
            $this->datumGebruik = $datumGebruik;
        }
    }
}