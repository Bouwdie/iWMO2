<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\TypeVerwijzer;
use Hyperized\Iwmo2\Datatypes\Logisch\NaamVerwijzer;

/**
 * Class Verwijzer
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Verwijzer
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Gegevens over de persoon of instantie die een cliënt heeft doorverwezen naar ondersteuning, aangeduid als Type en Naam.';
    /**
     * @var TypeVerwijzer|null
     */
    private $type = null;
    /**
     * @var NaamVerwijzer|null
     */
    private $naam = null;

    /**
     * Verwijzer constructor.
     * @param TypeVerwijzer $type
     * @param NaamVerwijzer|null $naam
     */
    public function __construct(
        TypeVerwijzer $type,
        NaamVerwijzer $naam = null)
    {
        $this->type = $type;
        if(!is_null($naam)) {
            $this->naam = $naam;
        }
    }
}