<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\Datum;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Periode
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Periode
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'Aanduiding van een tijdsperiode met een Begindatum en/of een Einddatum.';
    /**
     * @var Datum|null
     * Optional
     */
    private $beginDatum;
    /**
     * @var Datum|null
     * Optional
     */
    private $eindDatum;

    /**
     * Periode constructor.
     * @param Datum|null $beginDatum
     * @param Datum|null $eindDatum
     */
    public function __construct(
        Datum $beginDatum = null,
        Datum $eindDatum = null
    ) {
        if($beginDatum !== null) {
            $this->beginDatum = $beginDatum;
        }
        if($eindDatum !== null) {
            $this->eindDatum = $eindDatum;
        }
    }
}