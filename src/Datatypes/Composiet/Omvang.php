<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\Eenheid;
use Hyperized\Iwmo2\Datatypes\Logisch\Frequentie;
use Hyperized\Iwmo2\Datatypes\Logisch\Volume;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Omvang
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Omvang
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Aanduiding van de omvang van de te leveren of geleverde ondersteuning, uitgedrukt in Volume, Eenheid en Frequentie.';
    /**
     * @var Volume|null
     */
    private $volume = null;
    /**
     * @var Eenheid|null
     */
    private $eenheid = null;
    /**
     * @var Frequentie|null
     */
    private $frequentie = null;

    /**
     * Omvang constructor.
     * @param Volume $volume
     * @param Eenheid $eenheid
     * @param Frequentie $frequentie
     */
    public function __construct(
        Volume $volume,
        Eenheid $eenheid,
        Frequentie $frequentie
    ) {
        $this->volume = $volume;
        $this->eenheid = $eenheid;
        $this->frequentie = $frequentie;
    }
}