<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD170
{
    use Meta;
    private $titel = "DATUMGEBRUIK";
    private $beschrijving = "Aanduiding van (het gedeelte van) een geboortedatum dat bekend is.";

    const code = [
        1 => "dag onbekend; alleen maand en jaar gebruiken",
        2 => "dag en maand onbekend; alleen jaar gebruiken",
        3 => "dag, maand en jaar onbekend; onbekende datum",
    ];
}