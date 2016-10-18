<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class WMO020
 * @package Hyperized\Iwmo2\Codelijsten
 */
class WMO020 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "PRODUCTCATEGORIE";
    /**
     * @var string
     */
    protected static $beschrijving = "Gecodeerde aanduiding van een (reeks van) productcategorie(ën) in functionele termen die losgekoppeld is van een bepaalde leverancier, waarbij wordt beschreven wat de inhoud en aard van de productcategorie is in termen van hulpverlening (wonen, zorg en welzijn).";

    /**
     * Productcategorie
     */
    const code = [
        '01' => "Hulp bij het huishouden",
        '02' => "Begeleiding",
        '03' => "Persoonlijke verzorging",
        '04' => "Kortdurend verblijf",
        '05' => "Woondiensten",
        '06' => "Overige ondersteuning gericht op het individu of huishouden/gezin",
        '07' => "Dagbesteding",
        '08' => "Vervoerdiensten",
        '09' => "Overige groepsgerichte ondersteuning",
        '10' => "Overige maatwerk arrangementen",
        '11' => "Rolstoelen",
        '12' => "Vervoervoorzieningen",
        '13' => "Woonvoorzieningen",
        '14' => "Overige hulpmiddelen",
        '15' => "Beschermd wonen",
        '16' => "Opvang",
        '17' => "Spoedopvang",
        '18' => "Overige beschermd wonen en opvang",
    ];
}