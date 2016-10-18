<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD825
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD825 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "VRAAG BEPERKING";
    /**
     * @var string
     */
    protected static $beschrijving = "Gecodeerde aanduiding van de vraag over beperking.";

    /**
     * Vraag beperking
     */
    const code = [
        '0101' => "Sociale redzaamheid - Problemen oplossen, besluiten nemen en gevolgen inschatten",
        '0102' => "Sociale redzaamheid - Initiëren + uitvoeren van eenvoudige taken (bv. eten maken, de was doen)",
        '0103' => "Sociale redzaamheid - Initiëren + uitvoeren van complexere taken (bv. werkritme)",
        '0104' => "Sociale redzaamheid - Dagelijkse routine regelen: structuur in dagindeling",
        '0105' => "Sociale redzaamheid - Dagelijkse bezigheden: activiteiten plannen/uitvoeren",
        '0106' => "Sociale redzaamheid - Kunnen lezen, schrijven en rekenen",
        '0107' => "Sociale redzaamheid - Zelf geld beheren, weten hoe je iets koopt en betaalt",
        '0108' => "Sociale redzaamheid - Zelf allerlei administratieve zaken afhandelen",
        '0109' => "Sociale redzaamheid - Zich redden bij het gebruik van openbaar vervoer",
        '0110' => "Sociale redzaamheid - Zich redden in winkels, postkantoor, bank, etc.",
        '0111' => "Sociale redzaamheid - Communicatie: begrijpen wat anderen zeggen",
        '0112' => "Sociale redzaamheid - Communicatie: zich begrijpelijk maken naar anderen",
        '0113' => "Sociale redzaamheid - Communicatie: een gesprek voeren",
        '0114' => "Sociale redzaamheid - Hulpmiddelen voor communicatie gebruiken (telefoon, computer, etc.)",
        '0201' => "Mobiliteit - Lichaamspositie veranderen (opstaan uit stoel, knielen en opstaan)",
        '0202' => "Mobiliteit - Lichaamspositie handhaven (rechtop staan; in stoel zitten)",
        '0203' => "Mobiliteit - Lichtere voorwerpen tillen en dragen (bijv. kopje oppakken)",
        '0204' => "Mobiliteit - Zwaardere voorwerpen tillen en dragen (bijv. kind in bed leggen)",
        '0205' => "Mobiliteit - Gecoördinerede bewegingen met benen/voeten maken (bijv. fietsen)",
        '0206' => "Mobiliteit - Fijne handbewegingen maken (bijv. geld tellen, toetsen indrukken)",
        '0207' => "Mobiliteit - Grove hand- en armbewegingen maken (duwen, trekken, vangen)",
        '0208' => "Mobiliteit - Zich voortbewegen binnenshuis, zonder hulp of hulpmiddelen",
        '0209' => "Mobiliteit - Trap op en af gaan, zonder hulp of hulpmiddelen",
        '0210' => "Mobiliteit - Korte afstanden lopen: ten hoogste kilometer",
        '0211' => "Mobiliteit - Zich verplaatsen buitenshuis (> kilometer) zonder hulp/hulpmiddelen",
        '0212' => "Mobiliteit - Zich verplaatsen met gebruik van hulpmiddelen (rollator, rolstoel, etc.)",
        '0213' => "Mobiliteit - Een eigen vervoermiddel gebruiken (fiets, auto)",
        '0214' => "Mobiliteit - Gebruik maken van openbaar vervoer (trein, bus)",
        '0301' => "Persoonlijke zorg - Zich wassen: delen van lichaam of gehele lichaam",
        '0302' => "Persoonlijke zorg - Zich kleden: aankleden en uitkelden",
        '0303' => "Persoonlijke zorg - In en uit bed gaan",
        '0304' => "Persoonlijke zorg - Zich verplaatsen in zit- of lighouding",
        '0305' => "Persoonlijke zorg - Naar toilet gaan en zich reinigen",
        '0306' => "Persoonlijke zorg - Eten en drinken",
        '0307' => "Persoonlijke zorg - Persoonlijke zorg voor tanden, haren, nagels, huid",
        '0308' => "Persoonlijke zorg - Zelf aanbrengen van een prothese",
        '0309' => "Persoonlijke zorg - Voor eigen gezondheid zorgen (gezonde voeding etc.)",
        '0401' => "Huishoudelijk leven - Boodschappen voor het dagelijks leven doen",
        '0402' => "Huishoudelijk leven - Maaltijden bereiden: broodmaaltijd",
        '0403' => "Huishoudelijk leven - Maaltijden bereiden: warme maaltijd",
        '0404' => "Huishoudelijk leven - Licht poetswerk in huis; kamers opruimen",
        '0405' => "Huishoudelijk leven - Huis schoonmaken, stofzuigen, wc/badkamer reinigen",
        '0406' => "Huishoudelijk leven - Kleding/linnengoed wassen (\"de was doen\")",
        '0407' => "Huishoudelijk leven - Huishoudelijke apparaten gebruiken (wasmachine, stofzuiger, strijkijzer)",
        '0408' => "Huishoudelijk leven - Huishoudelijke spullen in orde houden (kleding, planten, apparaten)",
        '0409' => "Huishoudelijk leven - Anderen in huishouden helpen met zelfverzorging",
        '0410' => "Huishoudelijk leven - Anderen helpen bij bereiden maaltijden, eten, etc.",
        '0411' => "Huishoudelijk leven - Dagelijkse organisatie van het huishouden",
        '0501' => "Sociale relaties en maatschappelijk leven - Relaties met familie onderhouden",
        '0502' => "Sociale relaties en maatschappelijk leven - Zelfstandig met anderen contacten opbouwen",
        '0503' => "Sociale relaties en maatschappelijk leven - Zelfstandig met anderen (vrienden) contacten onderhouden",
        '0504' => "Sociale relaties en maatschappelijk leven - Zelfstandig aan clubs en verenigingen deelnemen",
        '0505' => "Sociale relaties en maatschappelijk leven - Vrijetijdsbesteding buitenshuis: naar sport, theater, café, etc.",
        '0506' => "Sociale relaties en maatschappelijk leven - Zelfstandig naar algemene voorzieningen gaan (zoals winkels, bibliotheek)",
        '0601' => "Deelname onderwijs, werk - Deelname aan gewone kinderopvang",
        '0602' => "Deelname onderwijs, werk - School volgen binnen het gewoon onderwijs",
        '0603' => "Deelname onderwijs, werk - School volgen binnen het speciaal onderwijs",
        '0604' => "Deelname onderwijs, werk - Meedoen aan naschoolse of buitenschoolse opvang",
        '0605' => "Deelname onderwijs, werk - OUDERS van vrager: opvoeden van kind (ontwikkelen van vaardigheden)",
        '0606' => "Deelname onderwijs, werk - OUDERS van vrager: dagelijkse structuur bieden aan het opgroeiende kind",
        '0607' => "Deelname onderwijs, werk - Een betaalde baan zoeken en krijgen",
        '0608' => "Deelname onderwijs, werk - Een dagtaak uitvoeren, een vast werkritme aanhouden",
        '0609' => "Deelname onderwijs, werk - Betaald werk doen: voltijds",
        '0610' => "Deelname onderwijs, werk - Betaald werk doen: deeltijd",
        '0611' => "Deelname onderwijs, werk - Niet-betaald werk doen in vrijwillige verbanden",
    ];
}