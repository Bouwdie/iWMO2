<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\Telefoonnummer;
use Hyperized\Iwmo2\Datatypes\Logisch\Landnummer;

/**
 * Class Telefoon
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Telefoon
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Het telefoonnummer waarop de cliënt of relatie van de cliënt te bereiken is.';
    /**
     * @var Telefoonnummer|null
     */
    private $telefoonNummer = null;
    /**
     * @var Landnummer|null
     */
    private $landNummer = null;

    /**
     * Telefoon constructor.
     * @param Telefoonnummer $telefoonNummer
     * @param Landnummer $landNummer
     */
    public function __construct(
        Telefoonnummer $telefoonNummer,
        Landnummer $landNummer
    ) {
        $this->telefoonNummer = $telefoonNummer;
        $this->landNummer = $landNummer;
    }
}