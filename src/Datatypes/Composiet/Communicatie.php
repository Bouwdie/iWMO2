<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\CommunicatieVorm;
use Hyperized\Iwmo2\Datatypes\Logisch\Taal;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Communicatie
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Communicatie
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Aanduiding over bijzondere vorm van communicatie die gebruikt dient te worden.';
    /**
     * @var CommunicatieVorm|null
     */
    private $vorm = null;
    /**
     * @var Taal|null
     * Optional
     */
    private $taal = null;

    /**
     * Communicatie constructor.
     * @param CommunicatieVorm $vorm
     * @param Taal|null $taal
     */
    public function __construct(
        CommunicatieVorm $vorm,
        Taal $taal = null
    ) {
        $this->vorm = $vorm;
        if(!is_null($taal)) {
            $this->taal = $taal;
        }
    }

}