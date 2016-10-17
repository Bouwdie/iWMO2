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
    private $beschrijving = 'Aanduiding van een tijdsperiode met een Begindatum en/of een Einddatum.';
    /**
     * @var Datum|null
     * Optional
     */
    private $beginDatum = null;
    /**
     * @var Datum|null
     * Optional
     */
    private $eindDatum = null;

    /**
     * Periode constructor.
     * @param Datum|null $beginDatum
     * @param Datum|null $eindDatum
     */
    public function __construct(
        Datum $beginDatum = null,
        Datum $eindDatum = null
    ) {
        if(!is_null($beginDatum)) {
            $this->beginDatum = $beginDatum;
        }
        if(!is_null($eindDatum)) {
            $this->eindDatum = $eindDatum;
        }
    }
}