<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\BerichtCode;
use Hyperized\Iwmo2\Datatypes\Logisch\BerichtSubversie;
use Hyperized\Iwmo2\Datatypes\Logisch\BerichtVersie;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Berichtspecificatie
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Berichtspecificatie
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Aanduiding van het soort bericht, uitgedrukt in een berichtcode, versienummer en subversienummer.';

    /**
     * @var BerichtCode|null
     */
    private $code = null;
    /**
     * @var BerichtVersie|null
     */
    private $versie = null;
    /**
     * @var BerichtSubversie|null
     * Optional
     */
    private $subVersie = null;

    /**
     * Berichtspecificatie constructor.
     * @param BerichtCode $code
     * @param BerichtVersie $versie
     * @param BerichtSubversie|null $subVersie
     */
    public function __construct(
        BerichtCode $code,
        BerichtVersie $versie,
        BerichtSubversie $subVersie = null
    ) {
        $this->code = $code;
        $this->versie = $versie;
        if(!is_null($subVersie)) {
            $this->subVersie = $subVersie;
        }
    }
}