<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD472
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD472 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "SOORT RELATIE";
    /**
     * @var string
     */
    protected static $beschrijving = "De soort relatie die een persoon ten opzichte van de cliënt heeft.";

    /**
     * Soort relatie
     */
    const code = [
        '03' => "Curator (juridisch)",
        '04' => "Financieel (gemachtigd)",
        '05' => "Financieel (toetsing)",
        '06' => "Leefeenheid",
        '07' => "Hulpverlener",
        '08' => "Specialist",
        '09' => "Anders",
        '10' => "Ouder",
        '11' => "Voogd",
        '12' => "Partner/echtgeno(o)t(e)",
        '13' => "Pleegouder",
        '14' => "Bewindvoerder",
        '15' => "Mentor",
        '16' => "Zoon/dochter",
        '17' => "Familielid",
        '18' => "Gezinslid",
        '19' => "Buur",
        '20' => "Vriend(in)/kennis",
        '21' => "Cliëntondersteuner",
        '22' => "Huisarts",
        '23' => "Erven van",
        '24' => "Werkgever",
        '25' => "Wijkcoach",
    ];
}