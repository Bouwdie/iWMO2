<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class WMO021
 * @package Hyperized\Iwmo2\Codelijsten
 */
class WMO021 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected $titel = "PRODUCTCODE";
    /**
     * @var string
     */
    protected static $beschrijving = "Aanduiding van een specifiek(e) product of dienst binnen een bepaalde productcategorie t.b.v. de levering van Wmo-ondersteuning.";

    /**
     * Productcode
     */
    const code = [
        '01001' => "HH1 (huishoudelijke werkzaamheden)",
        '01002' => "HH2 (organisatie van het huishouden)",
        '01A00' => "Hulp bij het huishouden",
        '01A01' => "HH 1: outputgericht",
        '01A02' => "HH 2: outputgericht",
        '01A03' => "HH 3: outputgericht",
        '01A04' => "HH 1: inspanningsgericht",
        '01A05' => "HH 2: inspanningsgericht",
        '01A06' => "HH 3: inspanningsgericht",
        '01A07' => "HH 1: outputgericht (licht)",
        '01A08' => "HH 1: outputgericht (middel)",
        '01A09' => "HH 1: outputgericht (middelzwaar)",
        '01A10' => "HH 1: outputgericht (zwaar)",
        '01A11' => "HH 1: outputgericht (extra zwaar)",
        '01A12' => "HH 2: outputgericht (licht)",
        '01A13' => "HH 2: outputgericht (middel)",
        '01A14' => "HH 2: outputgericht (middelzwaar)",
        '01A15' => "HH 2: outputgericht (zwaar)",
        '01A16' => "HH 2: outputgericht (extra zwaar)",
        '01A17' => "HH 3: outputgericht (licht)",
        '01A18' => "HH 3: outputgericht (middel)",
        '01A19' => "HH 3: outputgericht (middelzwaar)",
        '01A20' => "HH 3: outputgericht (zwaar)",
        '01A21' => "HH 3: outputgericht (extra zwaar)",
        '02001' => "Aanbrengen van structuur c.q. voeren van regie",
        '02002' => "Begeleiding bij beperkingen in de ontwikkeling",
        '02003' => "Begeleiding bij fysieke beperkingen",
        '02004' => "Begeleiding bij psychosociale beperkingen",
        '02005' => "Begeleiding bij vervoer",
        '02006' => "Begeleiding bij/naar het zelfstandig wonen",
        '02007' => "Oefenen (onder begeleiding)",
        '02008' => "Ondersteuning bij praktische handelingen/vaardigheden",
        '02009' => "Sociale relaties en maatschappelijk leven",
        '02010' => "Toezicht",
        '02011' => "Toeleiding ZG",
        '02012' => "Verlengde toeleiding ZG",
        '02013' => "Consultatie ZG",
        '02014' => "Beantwoording korte begeleidingsvragen ZG",
        '02015' => "Gespecialiseerde begeleiding ZG",
        '02016' => "Revaliderende begeleiding ZG",
        '02017' => "Begeleidersvoorziening doofblinden",
        '02018' => "Doventolk",
        '02A00' => "Begeleiding",
        '02A01' => "Begeleiding regulier: outputgericht",
        '02A02' => "Begeleiding specialistisch: outputgericht",
        '02A03' => "Begeleiding regulier: inspanningsgericht",
        '02A04' => "Begeleiding mantelzorg: inspanningsgericht",
        '02A05' => "Begeleiding specialistisch: inspanningsgericht",
        '02A06' => "Begeleiding regulier: outputgericht (licht)",
        '02A07' => "Begeleiding regulier: outputgericht (middel)",
        '02A08' => "Begeleiding regulier: outputgericht (middelzwaar)",
        '02A09' => "Begeleiding regulier: outputgericht (zwaar)",
        '02A10' => "Begeleiding regulier: outputgericht (extra zwaar)",
        '02A11' => "Begeleiding specialistisch: outputgericht (licht)",
        '02A12' => "Begeleiding specialistisch: outputgericht (middel)",
        '02A13' => "Begeleiding specialistisch: outputgericht (middelzwaar)",
        '02A14' => "Begeleiding specialistisch: outputgericht (zwaar)",
        '02A15' => "Begeleiding specialistisch: outputgericht (extra zwaar)",
        '02A16' => "Begeleiding regulier: inspanningsgericht (individueel)",
        '02A17' => "Begeleiding regulier: inspanningsgericht (groep)",
        '02A18' => "Begeleiding regulier: inspanningsgericht (op afstand)",
        '02A19' => "Begeleiding specialistisch: inspanningsgericht (individueel)",
        '02A20' => "Begeleiding specialistisch: inspanningsgericht (groep)",
        '02A21' => "Begeleiding specialistisch: inspanningsgericht (op afstand)",
        '02L01' => "Vroegdoven: Toeleiding (landelijke inkoop ZG)",
        '02L02' => "Vroegdoven: Verlengde toeleiding (landelijke inkoop ZG)",
        '02L03' => "Vroegdoven: Consultatie (landelijke inkoop ZG)",
        '02L04' => "Vroegdoven: Beantwoording korte begeleidingsvragen (landelijke inkoop ZG)",
        '02L05' => "Vroegdoven: Gespecialiseerde begeleiding (landelijke inkoop ZG)",
        '02L06' => "Vroegdoven: Revaliderende begeleiding (landelijke inkoop ZG)",
        '02L08' => "Doofblinden: Toeleiding (landelijke inkoop ZG)",
        '02L09' => "Doofblinden: Verlengde toeleiding (landelijke inkoop ZG)",
        '02L10' => "Doofblinden: Consultatie (landelijke inkoop ZG)",
        '02L11' => "Doofblinden: Beantwoording korte begeleidingsvragen (landelijke inkoop ZG)",
        '02L12' => "Doofblinden: Gespecialiseerde begeleiding (landelijke inkoop ZG)",
        '02L13' => "Doofblinden: Begeleidersvoorziening (landelijke inkoop ZG)",
        '02L15' => "Visueel: gespecialiseerde begeleiding (landelijke inkoop ZG)",
        '03A00' => "Persoonlijke verzorging",
        '03A01' => "Persoonlijke verzorging specialistisch: outputgericht",
        '03A02' => "Persoonlijke verzorging regulier: outputgericht",
        '03A03' => "Persoonlijke verzorging regulier: inspanningsgericht",
        '03A04' => "Persoonlijke verzorging specialistisch: inspanningsgericht",
        '03A05' => "Persoonlijke verzorging regulier: outputgericht (licht)",
        '03A06' => "Persoonlijke verzorging regulier: outputgericht (middel)",
        '03A07' => "Persoonlijke verzorging regulier: outputgericht (zwaar)",
        '03A08' => "Persoonlijke verzorging specialistisch: outputgericht (licht)",
        '03A09' => "Persoonlijke verzorging specialistisch: outputgericht (middel)",
        '03A10' => "Persoonlijke verzorging specialistisch: outputgericht (zwaar)",
        '03A11' => "Persoonlijke verzorging regulier: inspanningsgericht (individueel)",
        '03A12' => "Persoonlijke verzorging regulier: inspanningsgericht (op afstand)",
        '03A13' => "Persoonlijke verzorging specialistisch: inspanningsgericht (individueel)",
        '03A14' => "Persoonlijke verzorging specialistisch: inspanningsgericht (op afstand)",
        '04001' => "Deeltijdverblijf",
        '04002' => "Logeeropvang",
        '04A00' => "Kortdurend verblijf",
        '04A01' => "Kortdurend verblijf: inspanningsgericht",
        '04A02' => "Kortdurend verblijf regulier",
        '04A03' => "Kortdurend verblijf deeltijdzorg",
        '04A04' => "Kortdurend verblijf: logeer/respijtzorg",
        '04A05' => "Kortdurend verblijf: inspanningsgericht (licht)",
        '04A06' => "Kortdurend verblijf: inspanningsgericht (middel)",
        '04A07' => "Kortdurend verblijf: inspanningsgericht (middelzwaar)",
        '04A08' => "Kortdurend verblijf: inspanningsgericht (zwaar)",
        '04A09' => "Kortdurend verblijf: inspanningsgericht (extra zwaar)",
        '05001' => "Huurderving",
        '05002' => "Keuring woonvoorziening",
        '05003' => "Tijdelijke huisvesting",
        '05004' => "Verhuizing en inrichting",
        '05005' => "Vrijmaken woning",
        '05A00' => "Woondiensten",
        '05A01' => "Huurderving",
        '05A02' => "Keuring woonvoorziening",
        '05A03' => "Tijdelijke huisversting",
        '05A04' => "Verhuizing en inrichting",
        '05A05' => "Vrijmaken woning",
        '05A06' => "Boodschappendienst",
        '05A07' => "Maaltijdvoorziening",
        '06001' => "Boodschappendienst",
        '06002' => "Maaltijdvoorziening",
        '06A00' => "Overige ondersteuning gericht op het individu of huishouden/gezin",
        '07001' => "Dagopvang bij beperking in de ontwikkeling",
        '07002' => "Dagopvang bij fysieke beperkingen",
        '07003' => "Dagopvang bij psychosociale beperkingen",
        '07004' => "Dagactiviteit zintuiglijk gehandicapten",
        '07A00' => "Dagbesteding",
        '07A01' => "Dagbesteding regulier: outputgericht",
        '07A02' => "Dagbesteding specialistisch: outputgericht",
        '07A03' => "Dagbesteding regulier: inspanningsgericht",
        '07A04' => "Dagbesteding specialistisch: inspanningsgericht",
        '07A05' => "Dagbesteding regulier: outputgericht (licht)",
        '07A06' => "Dagbesteding regulier: outputgericht (middel)",
        '07A07' => "Dagbesteding regulier: outputgericht (zwaar)",
        '07A08' => "Dagbesteding specialistisch: outputgericht (licht)",
        '07A09' => "Dagbesteding specialistisch: outputgericht (middel)",
        '07A10' => "Dagbesteding specialistisch: outputgericht (zwaar)",
        '07A11' => "Dagbesteding regulier: inspanningsgericht (licht)",
        '07A12' => "Dagbesteding regulier: inspanningsgericht (middel)",
        '07A13' => "Dagbesteding regulier: inspanningsgericht (zwaar)",
        '07A14' => "Dagbesteding specialistisch: inspanningsgericht (licht)",
        '07A15' => "Dagbesteding specialistisch: inspanningsgericht (middel)",
        '07A16' => "Dagbesteding specialistisch: inspanningsgericht (zwaar)",
        '07L01' => "Vroegdoven: Dagactiviteit zintuiglijk gehandicapten (landelijke inkoop ZG)",
        '07L02' => "Doofblinden: Dagactiviteit zintuiglijk gehandicapten (landelijke inkoop ZG)",
        '08001' => "Collectieve vervoerdienst",
        '08002' => "Collectieve vervoerdienst rolstoel",
        '08003' => "Financiële tegemoetkoming vervoer",
        '08004' => "Individueel rolstoelvervoer",
        '08005' => "Individueel vervoer",
        '08006' => "Rijles scootmobiel",
        '08007' => "Vervoer naar dagopvang",
        '08A00' => "Vervoerdiensten",
        '08A01' => "Vervoer: outputgericht",
        '08A02' => "Vervoer rolstoel: outputgericht",
        '08A03' => "Vervoer regulier: inspanningsgericht",
        '08A04' => "Vervoer rolstoel: inspanningsgericht",
        '08A05' => "Vervoer: outputgericht (licht)",
        '08A06' => "Vervoer: outputgericht (middel)",
        '08A07' => "Vervoer: outputgericht (zwaar)",
        '08A08' => "Vervoer rolstoel: outputgericht (licht)",
        '08A09' => "Vervoer rolstoel: outputgericht (middel)",
        '08A10' => "Vervoer rolstoel: outputgericht (zwaar)",
        '08A11' => "Vervoer regulier: inspanningsgericht",
        '08A12' => "Vervoer rolstoel: inspanningsgericht",
        '09A00' => "Overige groepsgerichte ondersteuning",
        '10A00' => "Overige maatwerkarrangementen",
        '10A01' => "Maatwerkarrangement ggz intramuraal",
        '10A02' => "Maatwerkarrangement ggz extramuraal",
        '10A03' => "Maatwerkarrangement zintuigelijk gehandicapten",
        '10A04' => "Maatwerkarrangement verstandelijk gehandicapten",
        '10A05' => "Maatwerkarrangement gehandicapten",
        '10A06' => "Maatwerkarrangement ouderen",
        '10A07' => "Maatwerkarrangement ggz intramuraal (licht)",
        '10A08' => "Maatwerkarrangement ggz intramuraal (middel)",
        '10A09' => "Maatwerkarrangement ggz intramuraal (middelzwaar)",
        '10A10' => "Maatwerkarrangement ggz intramuraal (zwaar)",
        '10A11' => "Maatwerkarrangement ggz intramuraal (extra zwaar)",
        '10A12' => "Maatwerkarrangement ggz extramuraal (licht)",
        '10A13' => "Maatwerkarrangement ggz extramuraal (middel)",
        '10A14' => "Maatwerkarrangement ggz extramuraal (middelzwaar)",
        '10A15' => "Maatwerkarrangement ggz extramuraal (zwaar)",
        '10A16' => "Maatwerkarrangement ggz extramuraal (extra zwaar)",
        '10A17' => "Maatwerkarrangement zintuigelijk gehandicapten (licht)",
        '10A18' => "Maatwerkarrangement zintuigelijk gehandicapten (middel)",
        '10A19' => "Maatwerkarrangement zintuigelijk gehandicapten (middelzwaar)",
        '10A20' => "Maatwerkarrangement zintuigelijk gehandicapten (zwaar)",
        '10A21' => "Maatwerkarrangement zintuigelijk gehandicapten (extra zwaar)",
        '10A22' => "Maatwerkarrangement verstandelijk gehandicapten (licht)",
        '10A23' => "Maatwerkarrangement verstandelijk gehandicapten (middel)",
        '10A24' => "Maatwerkarrangement verstandelijk gehandicapten (middelzwaar)",
        '10A25' => "Maatwerkarrangement verstandelijk gehandicapten (zwaar)",
        '10A26' => "Maatwerkarrangement verstandelijk gehandicapten (extra zwaar)",
        '10A27' => "Maatwerkarrangement gehandicapten (licht)",
        '10A28' => "Maatwerkarrangement gehandicapten (middel)",
        '10A29' => "Maatwerkarrangement gehandicapten (middelzwaar)",
        '10A30' => "Maatwerkarrangement gehandicapten (zwaar)",
        '10A31' => "Maatwerkarrangement gehandicapten (extra zwaar)",
        '10A32' => "Maatwerkarrangement ouderen (licht)",
        '10A33' => "Maatwerkarrangement ouderen (middel)",
        '10A34' => "Maatwerkarrangement ouderen (middelzwaar)",
        '10A35' => "Maatwerkarrangement ouderen (zwaar)",
        '10A36' => "Maatwerkarrangement ouderen (extra zwaar)",
        '10A37' => "Zelfstandig leven 1 (licht)",
        '10A38' => "Zelfstandig leven 1 (middel)",
        '10A39' => "Zelfstandig leven 1 (zwaar)",
        '10A40' => "Zelfstandig leven 2 (licht)",
        '10A41' => "Zelfstandig leven 2 (middel)",
        '10A42' => "Zelfstandig leven 2 (zwaar)",
        '10A43' => "Zelfstandig leven 3 (licht)",
        '10A44' => "Zelfstandig leven 3 (middel)",
        '10A45' => "Zelfstandig leven 3 (zwaar)",
        '10A46' => "Maatschappelijke deelname 1 (licht)",
        '10A47' => "Maatschappelijke deelname 1 (middel)",
        '10A48' => "Maatschappelijke deelname 1 (zwaar)",
        '10A49' => "Maatschappelijke deelname 2 (licht)",
        '10A50' => "Maatschappelijke deelname 2 (middel)",
        '10A51' => "Maatschappelijke deelname 2 (zwaar)",
        '10A52' => "Maatschappelijke deelname 3 (licht)",
        '10A53' => "Maatschappelijke deelname 3 (middel)",
        '10A54' => "Maatschappelijke deelname 3 (zwaar)",
        '11001' => "Accessoires rolstoel",
        '11002' => "Elektrische rolstoel",
        '11003' => "Handmatig bewogen rolstoel",
        '11004' => "Individuele aanpassing rolstoel",
        '11005' => "Onderhoud en reparatie",
        '11006' => "Sport rolstoel",
        '11007' => "Werkstoelen",
        '11A00' => "Rolstoelen",
        '11A01' => "Accessoires rolstoel",
        '11A02' => "Elektrische rolstoel",
        '11A03' => "Handmatig bewogen rolstoel",
        '11A04' => "Individuele aanpassing rolstoel",
        '11A05' => "Onderhoud en reparatie",
        '11A06' => "Sport rolstoel",
        '11A07' => "Werkstoelen",
        '12001' => "Aangepaste fietsen",
        '12002' => "Aanpassing vervoermiddel",
        '12003' => "Accessoires vervoersvoorziening",
        '12004' => "Ander verplaatsingsmiddel kinderen",
        '12005' => "Open elektrische buitenwagen (scootmobiel)",
        '12006' => "Gesloten buitenwagen",
        '12007' => "Ander verplaatsingsmiddel volwassenen",
        '12008' => "Bruikleenauto",
        '12009' => "Collectieve vervoervoorziening",
        '12010' => "Collectieve vervoervoorziening rolstoel",
        '12011' => "Driewielfietsen",
        '12012' => "Financiële tegemoetkoming vervoervoorziening",
        '12013' => "Onderhoud en reparatie",
        '12014' => "Verzekeringen",
        '12A00' => "Vervoervoorzieningen",
        '12A01' => "Aangepaste fietsen",
        '12A02' => "Aanpassing vervoermiddel",
        '12A03' => "Accessoires vervoersvoorziening",
        '12A04' => "Ander verplaatsingsmiddel kinderen",
        '12A05' => "Open elektrische buitenwagen (scootmobiel)",
        '12A06' => "Gesloten buitenwagen",
        '12A07' => "Ander verplaatsingsmiddel volwassenen",
        '12A08' => "Bruikleenauto",
        '12A09' => "Collectieve vervoervoorziening",
        '12A10' => "Collectieve vervoervoorziening rolstoel",
        '12A11' => "Driewielfietsen",
        '12A12' => "Financiële tegemoetkoming vervoervoorziening",
        '12A13' => "Onderhoud en reparatie",
        '12A14' => "Verzekeringen",
        '13001' => "Financiële tegemoetkoming woningaanpassing",
        '13002' => "Onroerende woonvoorziening",
        '13003' => "Roerende woonvoorziening",
        '13004' => "Traplift/tillift",
        '13005' => "Verwijderen woonvoorziening",
        '13006' => "Onderhoud en reparatie",
        '13A00' => "Woonvoorzieningen",
        '13A01' => "Financiële tegemoetkoming woningaanpassing",
        '13A02' => "Onroerende woonvoorziening",
        '13A03' => "Roerende woonvoorziening",
        '13A04' => "Traplift/tillift",
        '13A05' => "Verwijderen woonvoorziening",
        '13A06' => "Onderhoud en reparatie",
        '14A00' => "Overige hulpmiddelen",
        '15A00' => "Beschermd wonen",
        '15A01' => "Beschermd wonen: outputgericht",
        '15A02' => "Beschermd wonen: inspanningsgericht",
        '15A03' => "Beschermd wonen: outputgericht (licht)",
        '15A04' => "Beschermd wonen: outputgericht (middel)",
        '15A05' => "Beschermd wonen: outputgericht (middelzwaar)",
        '15A06' => "Beschermd wonen: outputgericht (zwaar)",
        '15A07' => "Beschermd wonen: outputgericht (extra zwaar)",
        '15A08' => "Beschermd wonen: inspanningsgericht (licht)",
        '15A09' => "Beschermd wonen: inspanningsgericht (middel)",
        '15A10' => "Beschermd wonen: inspanningsgericht (middelzwaar)",
        '15A11' => "Beschermd wonen: inspanningsgericht (zwaar)",
        '15A12' => "Beschermd wonen: inspanningsgericht (extra zwaar)",
        '15A13' => "Per dag VPT 1GGZ-C excl.BH excl.DB",
        '15A14' => "Per dag VPT 1GGZ-C excl.BH incl.DB",
        '15A15' => "Per dag VPT 2GGZ-C excl.BH excl.DB",
        '15A16' => "Per dag VPT 2GGZ-C excl.BH incl.DB",
        '15A17' => "Per dag VPT 3GGZ-C excl.BH excl.DB",
        '15A18' => "Per dag VPT 3GGZ-C excl.BH incl.DB",
        '15A19' => "Per dag VPT 4GGZ-C excl.BH excl.DB",
        '15A20' => "Per dag VPT 4GGZ-C excl.BH incl.DB",
        '15A21' => "Per dag VPT 5GGZ-C excl.BH excl.DB",
        '15A22' => "Per dag VPT 5GGZ-C excl.BH incl.DB",
        '15A23' => "Per dag VPT 6GGZ-C excl.BH excl.DB",
        '15A24' => "Per dag VPT 6GGZ-C excl.BH incl.DB",
        '15A25' => "Per dag ZZP 1GGZ-C excl.BH excl.DB",
        '15A26' => "Per dag ZZP 1GGZ-C excl.BH incl.DB",
        '15A27' => "Per dag ZZP 1GGZ-C incl.BH excl.DB",
        '15A28' => "Per dag ZZP 1GGZ-C incl.BH incl.DB",
        '15A29' => "Per dag ZZP 2GGZ-C excl.BH excl.DB",
        '15A30' => "Per dag ZZP 2GGZ-C excl.BH incl.DB",
        '15A31' => "Per dag ZZP 2GGZ-C incl.BH excl.DB",
        '15A32' => "Per dag ZZP 2GGZ-C incl.BH incl.DB",
        '15A33' => "Per dag ZZP 3GGZ-C excl.BH excl.DB",
        '15A34' => "Per dag ZZP 3GGZ-C excl.BH incl.DB",
        '15A35' => "Per dag ZZP 3GGZ-C incl.BH excl.DB",
        '15A36' => "Per dag ZZP 3GGZ-C incl.BH incl.DB",
        '15A37' => "Per dag ZZP 4GGZ-C excl.BH excl.DB",
        '15A38' => "Per dag ZZP 4GGZ-C excl.BH incl.DB",
        '15A39' => "Per dag ZZP 4GGZ-C incl.BH excl.DB",
        '15A40' => "Per dag ZZP 4GGZ-C incl.BH incl.DB",
        '15A41' => "Per dag ZZP 5GGZ-C excl.BH excl.DB",
        '15A42' => "Per dag ZZP 5GGZ-C excl.BH incl.DB",
        '15A43' => "Per dag ZZP 5GGZ-C incl.BH excl.DB",
        '15A44' => "Per dag ZZP 5GGZ-C incl.BH incl.DB",
        '15A45' => "Per dag ZZP 6GGZ-C excl.BH excl.DB",
        '15A46' => "Per dag ZZP 6GGZ-C excl.BH incl.DB",
        '15A47' => "Per dag ZZP 6GGZ-C incl.BH excl.DB",
        '15A48' => "Per dag ZZP 6GGZ-C incl.BH incl.DB",
        '16001' => "Dak- en thuislozen opvang",
        '16002' => "Vrouwenopvang",
        '16A00' => "Opvang",
        '16A01' => "Opvang: outputgericht",
        '16A02' => "Opvang: inspanningsgericht",
        '16A03' => "Opvang: outputgericht (licht)",
        '16A04' => "Opvang: outputgericht (middel)",
        '16A05' => "Opvang: outputgericht (zwaar)",
        '17001' => "Crisisopvang",
        '17A00' => "Spoedopvang",
        '17A01' => "Spoedopvang: inspanningsgericht",
        '18A00' => "Overige beschermd wonen en opvang",
    ];
}