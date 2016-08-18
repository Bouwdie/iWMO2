<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class WJ001
{
    use Meta;
    private $titel = "RETOURCODE";
    private $beschrijving = "Melding in een retourbericht. Het betreft een code die in een retourbericht het resultaat van de beoordeling van een (deel van een) ontvangen bericht weergeeft.";

    const code = [
        '0001' => "Bericht is afgekeurd om technische redenen.",
        '0002' => "KENMERK RECORD ontbreekt of is onjuist.",
        '0003' => "RESERVE ontbreekt of is onjuist.",
        '0010' => "Berichtcode ontbreekt of is onjuist.",
        '0011' => "Versienummer berichtstandaard ontbreekt of is onjuist.",
        '0013' => "Code servicebureau ontbreekt, is onbekend of onjuist.",
        '0014' => "Zorgverlenerscode ontbreekt, is onbekend of onjuist (voorlooprecord).",
        '0016' => "Praktijkcode ontbreekt, is onbekend of onjuist (voorlooprecord).",
        '0017' => "Instellingscode, ontbreekt, is onbekend of onjuist (voorlooprecord).",
        '0018' => "Gemeentcode ontbreekt of is onjuist (voorlooprecord).",
        '0020' => "Begindatum declaratie-/factuurperiode ontbreekt of is onjuist.",
        '0021' => "Einddatum declaratie-/factuurperiode ontbreekt of is onjuist.",
        '0025' => "Dagtekening factuur ontbreekt of is niet bestaand.",
        '0026' => "IDENTIFICATIE AANLEVERING ontbreekt of is onjuist.",
        '0030' => "Factuurnummer declarant ontbreekt, is onjuist of is niet uniek (nummer is reeds gebruikt in een voorgaande factuur).",
        '0031' => "Valutacode ontbreekt of is onjuist.",
        '0035' => "Versieaanduiding informatiesysteem softwareleverancier ontbreek of is onjuist.",
        '0036' => "TEKENSET HEENBERICHT ontbreekt of is onjuist.",
        '0148' => "AANTAL DESKUNDIGERECORDS ontbreekt of is onjuist.",
        '0149' => "AANTAL AANVRAAGRECORDS ontbreekt of is onjuist.",
        '0150' => "Totaal declaratie-/factuurbedrag ontbreekt of is onjuist.",
        '0151' => "AANTAL VERZEKERDENRECORDS ontbreekt of is onjuist.",
        '0153' => "AANTAL COMMENTAARRECORDS ontbreekt of is onjuist.",
        '0155' => "AANTAL CLIENTRECORDS ontbreekt of is onjuist.",
        '0156' => "TOTAAL AANTAL DETAILRECORDS ontbreekt of is onjuist.",
        '0157' => "AANTAL DEBITEURRECORDS ontbreekt of is onjuist.",
        '0158' => "AANTAL PRESTATIERECORDS ontbreekt of is onjuist.",
        '0163' => "AANTAL RELATIERECORDS ontbreekt of is onjuist.",
        '0164' => "AANTAL ADRESRECORDS ontbreekt of is onjuist.",
        '0166' => "AANTAL ZIEKTEBEELD- EN STOORNISRECORDS ontbreekt of is onjuist.",
        '0167' => "AANTAL BEPERKINGRECORDS ontbreekt of is onjuist.",
        '0168' => "AANTAL BESCHIKKINGRECORDS ontbreekt of is onjuist.",
        '0170' => "AANTAL ACTIVITEITRECORDS ontbreekt of is onjuist.",
        '0179' => "AANTAL PRODUCTRECORDS (TOEGEWEZEN) ontbreekt of is onjuist.",
        '0183' => "AANTAL PRODUCTRECORDS (BESCHIKT) ontbreekt of is onjuist.",
        '0185' => "AANTAL PRODUCTRECORDS (GELEVERD) ontbreekt of is onjuist.",
        '0187' => "AANTAL SCORE STOORNISRECORDS ontbreekt of is onjuist.",
        '0188' => "AANTAL SCORE BEPERKINGRECORDS ontbreekt of is onjuist.",
        '0189' => "AANTAL MUTATIE FUNCTIERECORDS ontbreekt of is onjuist.",
        '0190' => "AANTAL ZORGZWAARTEPAKKETRECORDS (BESCHIKT) ontbreekt of is onjuist.",
        '0191' => "AANTAL ZORGZWAARTEPAKKETRECORDS (TOEGEWEZEN) ontbreekt of is onjuist.",
        '0192' => "AANTAL ZORGZWAARTEPAKKETRECORDS (GELEVERD) ontbreekt of is onjuist.",
        '0193' => "AANTAL MUTATIE ZORGZWAARTEPAKKETRECORDS ontbreekt of is onjuist.",
        '0194' => "AANTAL AANVRAAG PRODUCTRECORDS ontbreekt of is onjuist.",
        '0195' => "AANTAL AANVRAAG ZORGZWAARTEPAKKETRECORDS ontbreekt of is onjuist.",
        '0196' => "AANTAL PRODUCTRECORDS (WACHTLIJST) ontbreekt of is onjuist.",
        '0197' => "AANTAL ZORGZWAARTEPAKKETRECORDS (WACHTLIJST) ontbreekt of is onjuist.",
        '0198' => "AANTAL LEVERINGSSTATUSRECORDS ontbreekt of is onjuist.",
        '0200' => "Geen opmerking over dit record.",
        '0207' => "Records niet beoordeeld, VOORLOOPRECORD ontbreekt of is onjuist.",
        '0208' => "Records niet beoordeeld, SLUITRECORD ontbreekt of is onjuist.",
        '0233' => "Record is niet beoordeeld.",
        '0309' => "GEHEIME CLIENT ontbreekt of is onjuist.",
        '0310' => "Voorletters ontbreken of zijn onjuist.",
        '0311' => "VOORVOEGSEL (01) ontbreekt of is onjuist.",
        '0312' => "NAAM (01) ontbreekt of is onjuist..",
        '0316' => "Code land verzekerde ontbreekt of is onjuist.",
        '0317' => "Naamcode/naamgebruik (01) ontbreekt of is onjuist.",
        '0350' => "GEBOORTEDATUM ontbreekt of is onjuist.",
        '0351' => "GESLACHT ontbreekt of is onjuist.",
        '0354' => "BURGERLIJKE STAAT cliënt ontbreekt of is onjuist.",
        '0383' => "WMO-aanbieder ontbreekt of is onjuist.",
        '0387' => "VOORVOEGSEL (02) ontbreekt of is onjuist.",
        '0388' => "NAAM (02) ontbreekt of is onjuist.",
        '0389' => "NAAMCODE (02) ontbreekt of is onjuist.",
        '0397' => "Naamcode/naamgebruik (03) ontbreekt of is onjuist.",
        '0398' => "DATUMGEBRUIK ontbreekt of is onjuist.",
        '0399' => "BSN ontbreekt of is onjuist.",
        '0402' => "COMMUNICATIEVORM ontbreekt of is onjuist.",
        '0403' => "COMMUNICATIETAAL ontbreekt of is onjuist.",
        '0404' => "JURIDISCHE STATUS ontbreekt of is onjuist.",
        '0406' => "HUISNUMMER ontbreekt of is onjuist.",
        '0407' => "HUISNUMMERTOEVOEGING ontbreekt of is onjuist.",
        '0408' => "Postcode ontbreekt of onjuist",
        '0409' => "STRAATNAAM ontbreekt of is onjuist.",
        '0410' => "PLAATSNAAM ontbreekt of is onjuist.",
        '0411' => "ORGANISATIE ontbreekt of is onjuist.",
        '0415' => "EMAILADRES ontbreekt of is onjuist.",
        '0423' => "Gemeentecode ontbreekt of is onjuist (detailrecord).",
        '0426' => "LANDCODE ontbreekt of is onjuist.",
        '0427' => "TELEFOON (01) ontbreekt of is onjuist.",
        '0428' => "LANDNUMMER (01) ontbreekt of is onjuist.",
        '0429' => "TELEFOON (02) ontbreekt of is onjuist.",
        '0430' => "LANDNUMMER (02) ontbreekt of is onjuist.",
        '0431' => "POSTCODE ontbreekt of is onjuist.",
        '0435' => "Burgerservicenummer (BSN) verzekerde ontbreekt of is onjuist.",
        '0451' => "HUISLETTER ontbreekt of is onjuist.",
        '0452' => "AANDUIDING WOONADRES ontbreekt of is onjuist.",
        '0523' => "Indicatie ongeval ontbreekt of is onjuist.",
        '0540' => "DIAGNOSECODELIJST ontbreekt of is onjuist.",
        '0546' => "SUBCODE DIAGNOSECODELIJST ontbreekt of is onjuist.",
        '0550' => "Machtigingsnummer / meldingsnummer zorgverzekeraar ontbreekt of is onjuist.",
        '0551' => "Er is geen beschikking afgegeven.",
        '0553' => "Gedeclareerde prestatie valt buiten de gemachtigde periode.",
        '0559' => "Zorgverlenerscode behandelaar/uitvoerder heeft geen overeenkomst met declarerende praktijk of instelling.",
        '0562' => "Zorgverlener is niet erkend of bevoegd tot uitvoering van opgegeven prestatie.",
        '0565' => "HUISARTS ontbreekt of is onjuist.",
        '0581' => "Aanduiding productcodelijst ontbreekt of is onjuist.",
        '0582' => "Productcode (of artikel [AP] GPH-/DBC-declaratiecode) ontbreekt of is onjuist (niet bestaande code).",
        '0611' => "Tarief product ontbreekt of is niet in overeenstemming met landelijke of contractafspraken.",
        '0630' => "Debiteurnummer ontbreekt of is onjuist.",
        '0631' => "Indicatie debet/credit ontbreekt of is onjuist.",
        '0638' => "Aantal uitgevoerde producten of hoeveelheid afgeleverd ontbreekt of is onjuist.",
        '0643' => "Tijdseenheid zorgperiode ontbreekt of is onjuist.",
        '0651' => "Referentienummer voorgaande gerelateerde prestatierecord / verblijfrecord ontbreekt of is onjuist.",
        '0659' => "SOORT relatie ontbreekt of is onjuist.",
        '0677' => "RELATIENUMMER ontbreekt of is onjuist.",
        '0682' => "SOORT adres ontbreekt of is onjuist.",
        '0699' => "BEGINDATUM levering ontbreekt of is onjuist.",
        '0754' => "Regelnummer vrije tekst ontbreekt of is onjuist.",
        '0755' => "Regel/vrije tekst ontbreekt of is onjuist.",
        '0801' => "IDENTIFICATIE DETAILRECORD ontbreekt of is onjuist.",
        '0802' => "Fysieke plaats record onjuist.",
        '0803' => "Record is dubbel opgenomen.",
        '0804' => "Lengte record onjuist.",
        '0806' => "STATUS AANLEVERING RECORD ontbreekt of is onjuist.",
        '0836' => "Huisnummertoevoeging (huisadres) verzekerde ontbreekt of is onjuist.",
        '1000' => "Code indicatieorgaan ontbreekt of is onjuist.",
        '1002' => "GEMEENTECODE ontbreekt of is onjuist.",
        '1054' => "LEEFEENHEID ontbreekt of is onjuist.",
        '1060' => "Cliëntnummer ontbreekt of is onjuist.",
        '1061' => "Aanvraagnummer indicatie/beschikking ontbreekt of is onjuist.",
        '1062' => "Beschikkingnummer of indicatiebesluitnummer ontbreekt of is onjuist.",
        '1064' => "BEGINDATUM adres ontbreekt of is onjuist.",
        '1065' => "EINDDATUM adres ontbreekt of is onjuist.",
        '1074' => "GRONDSLAG ontbreekt of is onjuist.",
        '1075' => "ZIEKTEBEELD/STOORNIS ontbreekt of is onjuist.",
        '1076' => "PROGNOSE ontbreekt of is onjuist.",
        '1079' => "BEPERKING ontbreekt of is onjuist.",
        '1081' => "DUUR ontbreekt of is onjuist.",
        '1092' => "VOLGORDE ontbreekt of is onjuist.",
        '1110' => "Waarde gemeentecode moet gelijk zijn aan waarde gemeentecode voorlooprecord.",
        '1112' => "PRODUCTCATEGORIE ontbreekt of is onjuist.",
        '1113' => "Productcategorie / functiecode / zorgzwaartepakketcode ontbreekt of is onjuist.",
        '1115' => "GRONDSLAG (01) ontbreekt of is onjuist.",
        '1116' => "LEVERINGSVOORWAARDE ontbreekt of is onjuist.",
        '1117' => "VERVOER ontbreekt of is onjuist.",
        '1119' => "INGANGSDATUM geïndiceerde zorgeenheid ontbreekt of is onjuist.",
        '1120' => "EINDDATUM geïndiceerde zorgeenheid ontbreekt of is onjuist.",
        '1121' => "DAGTEKENING HEENBERICHT ontbreekt of is onjuist.",
        '1122' => "AANTAL MANTELZORGRECORDS ontbreekt of is onjuist.",
        '1123' => "LEVERINGSVORM ontbreekt of is onjuist.",
        '1124' => "INSTELLING VOORKEUR ontbreekt of is onjuist.",
        '1125' => "VOLUME ontbreekt of is onjuist.",
        '1142' => "PRODUCTCODE ontbreekt of is onjuist.",
        '1143' => "GRONDSLAG (02) ontbreekt of is onjuist.",
        '1145' => "EENHEID ontbreekt of is onjuist.",
        '1146' => "Raamcontract ontbreekt of is onjuist.",
        '1147' => "GezagsdragerBekend ontbreekt of is onjuist.",
        '1154' => "MUTATIECODE ontbreekt of is onjuist.",
        '1156' => "MUTATIEDATUM ontbreekt of is onjuist.",
        '1158' => "INSTELLING BESTEMMING ontbreekt of is onjuist.",
        '1173' => "TOEWIJZINGSDATUM ontbreekt of is onjuist.",
        '1174' => "INGANGSDATUM zorgtoewijzing ontbreekt of is onjuist.",
        '1175' => "EINDDATUM zorgtoewijzing ontbreekt of is onjuist.",
        '1190' => "VRAAG STOORNIS ontbreekt of is onjuist.",
        '1191' => "SCORE STOORNIS ontbreekt of is onjuist.",
        '1192' => "VRAAG BEPERKING ontbreekt of is onjuist.",
        '1193' => "SCORE BEPERKING ontbreekt of is onjuist.",
        '1201' => "TOEWIJZINGSTIJD ontbreekt of onjuist.",
        '1207' => "SOORT toewijzing ontbreekt of is onjuist.",
        '1208' => "REDEN INTREKKING ontbreekt of is onjuist.",
        '1209' => "REGELZORG ontbreekt of is onjuist.",
        '1210' => "LEVERINGSSTATUS ontbreekt of is onjuist.",
        '1211' => "SLEUTELDATUM ontbreekt of is onjuist.",
        '1213' => "GEBOORTEJAAR ontbreekt of is onjuist",
        '1214' => "VOLGNUMMER CLIENT ontbreekt of is onjuist",
        '1215' => "VOLGNUMMER INDICATIE ontbreekt of is onjuist",
        '1216' => "INGANGSDATUM STATUS ontbreekt of is onjuist",
        '1401' => "GEBRUIKELIJKE ZORG ontbreekt of is onjuist.",
        '1402' => "VERZORGING (G) ontbreekt of is onjuist.",
        '1403' => "VERPLEGING (G) ontbreekt of is onjuist.",
        '1404' => "BEGELEIDING (G) ontbreekt of is onjuist.",
        '1405' => "LEEFKLIMAAT (G) ontbreekt of is onjuist.",
        '1406' => "OVERBELASTING (G) ontbreekt of is onjuist.",
        '1407' => "MANTELZORG ontbreekt of is onjuist.",
        '1408' => "AANDEEL (M) ontbreekt of is onjuist.",
        '1409' => "VERZORGING (M) ontbreekt of is onjuist.",
        '1410' => "VERPLEGING (M) ontbreekt of is onjuist.",
        '1411' => "BEGELEIDING (M) ontbreekt of is onjuist.",
        '1412' => "LEEFKLIMAAT (M) ontbreekt of is onjuist.",
        '1413' => "OVERIG (M) ontbreekt of is onjuist.",
        '1414' => "OVERBELASTING (M) ontbreekt of is onjuist.",
        '1415' => "NaamVerwijzer ontbreekt of is onjuist.",
        '1416' => "Frequentie ontbreekt of is onjuist",
        '2293' => "De waarde van rubriek 0105 Soort bericht moet voldoen aan de omgeving van VECOZO (productie of test).",
        '4702' => "INGANGSDATUM indicatiebesluit ontbreekt of is onjuist.",
        '4703' => "EINDDATUM indicatiebesluit ontbreekt of is onjuist.",
        '4761' => "AFGIFTEDATUM ontbreekt of is onjuist.",
        '5703' => "DBC-prestatiecode ontbreekt of is onjuist.",
        '5755' => "DBC-poortspecialisme is onbekend of onjuist.",
        '5800' => "Soort prestatie/tarief ontbreekt of is onjuist.",
        '5803' => "Verrekenpercentage/factor ontbreekt of is onjuist.",
        '8001' => "Declaratie is volledig toegewezen",
        '8002' => "Record is niet beoordeeld (wegens afkeuring boven- of ondergeschikt[e] record[s]).",
        '8004' => "Combinatie BSN en geboortedatum verzekerde is onjuist",
        '8007' => "(Begin-/eind)datum product ontbreekt of is onjuist.",
        '8011' => "Zorgverlenerscode behandelaar/uitvoerder of specialisme behandelaar/uitvoerder ontbreekt of is onjuist.",
        '8014' => "Zorgverlenerscode voorschrijver/verwijzer of specialisme voorschrijver/verwijzer ontbreekt of is onjuist.",
        '8016' => "BTW-percentage declaratie/-factuurbedrag is onjuist.",
        '8021' => "Referentienummer dit prestatierecord / verblijfrecord ontbreekt of is niet uniek (reeds aangeleverd).",
        '8026' => "Volgorde recordtypen is niet correct.",
        '8027' => "Subversienummer ontbreekt of is onjuist.",
        '8028' => "Soort bericht ontbreekt of is onjuist.",
        '8029' => "Identificatiecode betaling aan ontbreekt of is onjuist.",
        '8030' => "Indicatie cliënt overleden ontbreekt of is onjuist.",
        '8031' => "Doorsturen toegestaan ontbreekt of is onjuist.",
        '8032' => "Berekend bedrag ontbreekt of voldoet niet aan format.",
        '8033' => "Declaratie/-factuurbedrag ontbreekt of voldoet niet aan format.",
        '8061' => "Gemeente ondersteunt het ontvangen declaratiebestand via VECOZO volgens gebruikte standaard (soort EI-standaard of (sub)versienummer) niet.",
        '8062' => "Debetregel en identieke creditregel in hetzelfde bestand is niet toegestaan.",
        '8063' => "Berekend bedrag mag niet lager zijn dan gedeclareerd bedrag.",
        '8064' => "Indicaties debet/credit mogen niet verschillend zijn binnen één record inclusief onderliggende records.",
        '8065' => "Toeslag vervoer is gedeclareerd zonder bijbehorende prestatie.",
        '8066' => "Geen relatie bekend tussen zorgverlener in voorlooprecord en praktijk in voorlooprecord.",
        '8075' => "Recordtype 03 (Debiteurrecord) niet toegestaan bij bestandsuitwisseling naar zorgverzekeraar.",
        '8095' => "CR/LF zonder voorafgaand record of record zonder aansluitend CR/LF is niet toegestaan.",
        '8101' => "Verzekerdennummer ontbreekt of is onjuist.",
        '8102' => "Prestatievolgnummer ontbreekt of is onjuist.",
        '8107' => "Plaatsingsbesluitnummer Ministerie van Justitie ontbreekt of is onjuist.",
        '8111' => "Zorgtrajectnummer ontbreekt of is onjuist.",
        '8125' => "Afsluitreden zorgtraject/subtraject ontbreekt of is onjuist.",
        '8151' => "Geboortedatum verzekerde ontbreekt of is onjuist.",
        '8153' => "Naamcode/naamgebruik (02) ontbreekt of is onjuist.",
        '8165' => "De combinatie van bericht, versienr en subversienr is onjuist.",
        '8166' => "Code informatiesysteem softwareleverancier+versienummer informatiesysteem softwareleverancier moeten beide gevuld zijn of niet gevuld zijn.",
        '8167' => "Zorgverlenerscode moet gevuld zijn indien praktijkcode gevuld is.",
        '8168' => "Zorgverlenerscode mag niet gevuld zijn indien instellingscode gevuld is.",
        '8169' => "Praktijkcode mag niet gevuld zijn indien instellingscode gevuld is.",
        '8170' => "Praktijkcode en zorgverlenerscode moeten gevuld zijn indien instellingscode leeg is.",
        '8171' => "Code servicebureau moet gevuld zijn indien identificatiecode betaling aan gelijk is aan 1.",
        '8172' => "Zorgverlenerscode moet gevuld zijn indien identificatiecode betaling aan gelijk is aan 2.",
        '8173' => "Praktijkcode moet gevuld zijn indien identificatiecode betaling aan gelijk is aan 3.",
        '8174' => "Instellingscode moet gevuld zijn indien identificatiebetaling aan gelijk is aan 4.",
        '8175' => "Einddatum declaratieperiode moet groter zijn dan of gelijk zijn aan de begindatum declaratieperiode.",
        '8177' => "Begindatum prestatie moet kleiner zijn dan of gelijk zijn aan factuurdatum.",
        '8178' => "Einddatum prestatie moet kleiner zijn dan of gelijk zijn aan factuurdatum.",
        '8181' => "Naam verzekerde (02) moet gevuld zijn indien naamcode/naamgebruik (02) gevuld is.",
        '8182' => "Postcode buitenland mag niet gevuld zijn indien postcode Nederland gevuld is.",
        '8183' => "Postcode Nederland mag niet gevuld zijn indien postcode buitenland gevuld is.",
        '8184' => "Code land verzekerde moet gevuld zijn indien postcode buitenland gevuld is.",
        '8185' => "Postcode buitenland mag niet gevuld zijn indien code land is Nederland en andersom.",
        '8186' => "Postcode Nederland mag niet gevuld zijn indien code land is buitenland en andersom.",
        '8187' => "De prestatie hoort niet bij deze verzekerde.",
        '8188' => "Einddatum product moet groter zijn dan of gelijk zijn aan begindatum product.",
        '8193' => "Referentienummer voorgaande gerelateerd prestatierecord moet gevuld zijn in geval van creditregel.",
        '8194' => "Indicatie debet/credit moet de waarde D hebben indien het totaal declaratie-/factuurbedrag niet gevuld is.",
        '8198' => "Het bestand kan niet worden doorgestuurd. De gemeente is niet aangesloten op het elektronisch declaratieportaal van VECOZO.",
        '8199' => "Voorlooprecord komt ten onrechte meerdere keren voor.",
        '8200' => "Sluitrecord komt ten onrechte meerdere keren voor.",
        '8201' => "Code informatiesysteem ontbreekt of is onjuist.",
        '8202' => "Patiënt(identificatie)nummer is onjuist.",
        '8206' => "BTW-identificatienummer ontbreekt of is onjuist.",
        '8207' => "Referentienummer dit prestatierecord moet uniek zijn binnen het bestand.",
        '8215' => "Waarde Berekend bedrag is ongelijk aan waarde Aantal uitgevoerde producten maal Tarief product (incl. BTW).",
        '8220' => "Maximum aantal prestaties is overschreden.",
        '8222' => "Begindatum product ligt voor toegestane datum.",
        '8223' => "Naam verzekerde (02) mag niet gevuld zijn indien naamcode/naamgebruik (02) gelijk is aan 0.",
        '8227' => "Identificatie commentaarecord heeft geen bijbehorende identificatie detailrecord in dit bestand.",
        '8228' => "Voorvoegsel verzekerde (01) ontbreekt of is onjuist.",
        '8234' => "Code (zelf)verwijzer ontbreekt of is onjuist.",
        '8236' => "Aanduiding prestatiecodelijst (01) ontbreekt of is onjuist.",
        '8237' => "Aanduiding prestatiecodelijst (02) ontbreekt of is onjuist.",
        '8238' => "Referentienummer dit tariefrecord ontbreekt of is niet uniek (reeds aangeleverd).",
        '8239' => "Aantal tariefrecords ontbreekt of is onjuist.",
        '8255' => "Zorgactiviteitcode ontbreekt of is onjuist.",
        '8256' => "Referentienummer voorgaande gerelateerde tariefrecord ontbreekt of is onjuist.",
        '8257' => "Het tariefrecord hoort niet bij dit prestatierecord.",
        '8258' => "Referentienummer dit tariefrecord moet uniek zijn binnen het bestand.",
        '8259' => "Referentienummer voorgaande gerelateerd tariefrecord moet gevuld zijn in geval van creditregel.",
        '8269' => "Referentienummer voorgaande gerelateerde prestatierecord moet uniek zijn binnen het bestand.",
        '8282' => "Voorvoegsel verzekerde (02) ontbreekt of is onjuist.",
        '8283' => "Naam verzekerde (02) ontbreekt of is onjuist.",
        '8284' => "Zorgverlenerscode voorschrijver/verwijzer en/of Specialisme voorschrijver/verwijzer niet juist ingevuld in relatie met Code (zelf)verwijzer",
        '8287' => "Gedeclareerde zorgperiode valt buiten de zorgleveringsperiode op basis van aanvang ondersteuning en beëindiging ondersteuning.",
        '8289' => "Verzekerde heeft geen geldige beschikking voor gedeclareerde zorgperiode.",
        '8296' => "Bedrag ontvangen eigen bijdrage ontbreekt of is onjuist.",
        '8297' => "Soort prestatie/tarief ontbreekt of is onjuist in relatie met de DBC prestatiecode.",
        '8298' => "Aanduiding prestatiecodelijst (02) mag niet gelijk zijn aan aanduiding prestatiecodelijst (01).",
        '8300' => "DBC prestatiecode ontbreekt of is onjuist in relatie met soort prestatie/tarief.",
        '8301' => "Poortspecialisme ontbreekt of is onjuist in relatie met soort prestatie/tarief.",
        '8302' => "Begindatum prestatie moet gelijk zijn aan begindatum deelprestatie in relatie met soort prestatie/tarief.",
        '8303' => "Einddatum prestatie moet gelijk zijn aan einddatum deelprestatie in relatie met soort prestatie/tarief.",
        '8304' => "Zorgverlenersspecificatie behandelaar/uitvoerder (subberoepgroep) ontbreekt of is onjuist in relatie met soort prestatie/tarief.",
        '8305' => "Declaratiecode moet gelijk zijn aan declaratiecode deelprestatie in relatie met soort prestatie/tarief.",
        '8306' => "DBC prestatiecode en/of zorgtrajectnummer ontbreekt in relatie met soort prestatie/tarief.",
        '8307' => "Declaratiecode mag niet gelijk zijn aan declaratiecode deelprestatie in relatie met soort prestatie/tarief.",
        '8308' => "Aantal uitgevoerde prestaties is niet gelijk aan aantal dagen in periode begindatum deelprestratie t/m einddatum deelprestatie.",
        '8309' => "Begindatum deelprestatie moet gelijk zijn aan of groter zijn dan begindatum prestatie.",
        '8310' => "Einddatum deelprestatie moet gelijk zijn aan of groter zijn dan begindatum deelprestatie.",
        '8311' => "Referentienummer voorgaande gerelateerde tariefrecord moet uniek zijn binnen het bestand.",
        '8314' => "Eén of meer recordtypen zijn niet toegestaan.",
        '8327' => "Declaratiecode deelprestatie ontbreekt of is onjuist.",
        '8352' => "Productcategorie of zorgzwaartepakketcode moet gevuld zijn als AWBZ prestatiecodelijst en indicatiebesluitnummer indicatieorgaan zijn gevuld",
        '8376' => "Verzekerdenrecord is niet uniek in bestand.",
        '8382' => "Begindatum declaratieperiode ligt voor toegestane datum.",
        '8406' => "Cliënt heeft geen indicatie voor vervoer.",
        '8407' => "Gedeclareerde prestatie mag niet uitgevoerd worden bij verzekerde op basis van leeftijd.",
        '8414' => "Begindatum deelprestatie moet gelijk zijn aan einddatum deelprestatie in relatie met soort prestatie/tarief.",
        '8440' => "Referentienummer gemeente ontbreekt of is onjuist.",
        '8441' => "Dagtekening retourbericht ontbreekt of is onjuist.",
        '8442' => "Retourcode (01) ontbreekt of is onjuist.",
        '8443' => "Berekend bedrag zorgverzekeraar ontbreekt of is onjuist.",
        '8444' => "Toegekend bedrag ontbreekt of is onjuist.",
        '8445' => "Aantal verzekerdenrecords retour ontbreekt of is onjuist.",
        '8446' => "Aantal debiteurrecords retour ontbreekt of is onjuist.",
        '8447' => "Aantal prestatierecords retour ontbreekt of is onjuist.",
        '8448' => "Aantal commentaarrecords retour ontbreekt of is onjuist.",
        '8449' => "Totaal aantal detailrecords retour ontbreekt of is onjuist.",
        '8450' => "Totaal ingediend declaratie/-factuurbedrag ontbreekt of is onjuist.",
        '8451' => "Totaal toegekend bedrag ontbreekt of is onjuist.",
        '8452' => "Retourcode (02) ontbreekt of is onjuist.",
        '8453' => "Retourcode (03) ontbreekt of is onjuist.",
        '8454' => "Dagtekening retourbericht moet groter zijn dan of gelijk zijn aan factuurdatum.",
        '8455' => "Indicatie debet/credit moet de waarde D hebben, indien het totaal ingediend declaratie-/factuurbedrag niet gevuld is.",
        '8456' => "Indicatie debet/credit moet de waarde D hebben indien het totaal toegekend bedrag niet gevuld is.",
        '8597' => "Aantal tariefrecords retour ontbreekt of is onjuist.",
        '8611' => "Einddatum deelprestatie moet gelijk zijn aan of kleiner zijn dan einddatum prestatie.",
        '8616' => "Verwijsdatum ontbreekt of is onjuist",
        '8617' => "Instellingscode of praktijkcode voorschrijver/verwijzer ontbreekt of is onjuist",
        '8620' => "Code herdeclaratie ontbreekt of is onjuist",
        '8621' => "(Begin-/eind)datum zorgactiviteit ontbreekt of is onjuist",
        '8624' => "Referentienummer dit zorgactiviteitrecord ontbreekt of is niet uniek (reeds aangeleverd)",
        '8625' => "Referentienummer dit zorgactiviteitrecord moet uniek zijn binnen het bestand.",
        '8626' => "Referentienummer voorgaande gerelateerde zorgactiviteitrecord ontbreekt of is onjuist",
        '8627' => "Referentienummer voorgaande gerelateerd zorgactiviteitrecord moet gevuld zijn in geval van creditregel",
        '8628' => "Aantal zorgactiviteitrecords ontbreekt of is onjuist",
        '8629' => "Aantal zorgactiviteitrecords retour ontbreekt of is onjuist",
        '8633' => "Het zorgactiviteitrecord hoort niet bij dit prestatierecord",
        '8634' => "Afwijkende instellingscode zorgactiviteit moet afwijken van de declarerende instelling",
        '8643' => "Begindatum zorgactiviteit moet groter zijn dan of gelijk zijn aan Begindatum prestatie",
        '8649' => "Zorgverlenerscode hoofdbehandelaar ontbreekt of is onjuist.",
        '8650' => "Beroep hoofdbehandelaar ontbreekt of is onjuist.",
        '8651' => "Diagnose hoofdgroep ontbreekt of is onjuist.",
        '8652' => "Tijdseenheid zorgactiviteit ontbreekt of is onjuist.",
        '8653' => "Aantal tijdseenheden zorgactiviteit ontbreekt of is onjuist.",
        '8654' => "Tijdseenheid tijdsbesteding ontbreekt of is onjuist.",
        '8655' => "Aantal tijdseenheden totaal ontbreekt of is onjuist.",
        '8656' => "Aantal tijdseenheden direct ontbreekt of is onjuist.",
        '8657' => "Aantal tijdseenheden indirect ontbreekt of is onjuist.",
        '8658' => "Afwijkende instellingscode/praktijkcode ontbreekt of is onjuist.",
        '8659' => "Soort behandelaar ontbreekt of is onjuist.",
        '8660' => "Beroep medebehandelaar ontbreekt of is onjuist.",
        '8661' => "(Begin-/eind)datum tijdsbesteding ontbreekt of is onjuist.",
        '8662' => "Referentienummer dit tijdsbestedingrecord ontbreekt of is niet uniek (reeds aangeleverd).",
        '8663' => "Aantal tijdsbestedingrecords ontbreekt of is onjuist.",
        '8664' => "ROM J/N ontbreekt of is onjuist.",
        '8665' => "Prestatierecord is niet uniek in bestand.",
        '8666' => "Beroep hoofdbehandelaar ontbreekt in relatie met zorgverlenerscode hoofdbehandelaar.",
        '8667' => "Tariefrecord is niet uniek in bestand.",
        '8668' => "Zorgverlenerscode hoofbehandelaar ontbreekt in relatie met soort prestatie/tarief.",
        '8669' => "Prestatiecode te verwachten ontbreekt of is onjuist in relatie met soort prestatie/tarief.",
        '8670' => "ROM J/N is onjuist in relatie met soort prestatie/tarief.",
        '8671' => "Afsluitreden ontbreekt in relatie met soort prestatie/tarief.",
        '8672' => "Zorgactiviteitrecord is niet uniek in bestand.",
        '8673' => "Het zorgactiviteitrecord ontbreekt of mag niet voorkomen bij deze prestatie.",
        '8674' => "Einddatum zorgactiviteit moet kleiner zijn dan of gelijk zijn aan Einddatum prestatie.",
        '8675' => "Afwijkende praktijkcode zorgactiviteit moet afwijken van de declarerende praktijk.",
        '8676' => "Het tijdsbestedingrecord hoort niet bij dit prestatierecord.",
        '8677' => "Tijdsbestedingrecord is niet uniek in bestand.",
        '8678' => "Het tijdsbestedingrecord ontbreekt of mag niet voorkomen bij deze prestatie.",
        '8679' => "Begindatum tijdsbesteding moet groter zijn dan of gelijk zijn aan Begindatum prestatie.",
        '8680' => "Einddatum tijdsbesteding moet kleiner zijn dan of gelijk zijn aan Einddatum prestatie.",
        '8681' => "Een van beide, aantal tijdseenheden direct of indirect, moet gevuld zijn.",
        '8682' => "Referentienummer dit tijdsbestedingrecord moet uniek zijn binnen het bestand.",
        '8683' => "Referentienummer voorgaande gerelateerd tijdsbestedingrecord moet gevuld zijn in geval van creditregel.",
        '8795' => "Zorgvraagzwaarte is met ongeldige waarde gevuld.",
        '8812' => "Code Wmo-aanbieder moet gevuld zijn als Identificatiebetaling aan gelijk is aan 2.",
        '8815' => "Aantal tijdsbestedingrecords retour ontbreekt of is onjuist.",
        '8816' => "Einddatum declaratie-/factuurperiode valt na factuurdatum.",
        '8817' => "Berekend bedrag moet gevuld zijn met nullen",
        '8818' => "Screening verwijzer ontbreekt of is onjuist",
        '8819' => "Diagnosecode primair ontbreekt of is onjuist",
        '8820' => "Referentienummer voorgaande gerelateerde tijdsbestedingsrecord ontbreekt of is onjuist.",
        '8821' => "Aanvraagnummer opdracht ontbreekt of is onjuist.",
        '8822' => "Opdrachtnummer ontbreekt of is onjuist.",
        '8832' => "Referentienummer voorgaande gerelateerde tijdsbestedingrecord ontbreekt of is onjuist.",
        '8833' => "Indicatie BTW-vrijstelling ontbreekt of is onjuist.",
        '8834' => "BTW-bedrag ontbreekt of voldoet niet aan format.",
        '8835' => "Totaal BTW-bedrag ontbreekt of is onjuist.",
        '8836' => "BTW-bedrag moet gevuld zijn met nullen.",
        '8837' => "BTW-bedrag moet gevuld zijn.",
        '8838' => "Totaal aantal detailrecords is groter dan maximum.",
        '8839' => "Indicatie debet/credit moet de waarde D of spatie hebben indien het totaal BTW-bedrag met \"nullen\" gevuld is.",
        '8847' => "Begindatum declaratie-/factuurperiode moet kleiner zijn dan of gelijk zijn aan systeemdatum VECOZO.",
        '8848' => "Dagtekening factuur moet kleiner zijn dan of gelijk zijn aan systeemdatum VECOZO.",
        '8849' => "Dagtekening retourbericht moet kleiner zijn dan of gelijk zijn aan systeemdatum VECOZO.",
        '8850' => "BTW-bedrag mag niet gevuld zijn.",
        '8851' => "Indicatie BTW-vrijstelling moet gevuld zijn i.g.v. factuur.",
        '8852' => "Totaal BTW-bedrag moet gevuld zijn met nullen.",
        '8853' => "Creditering afgekeurde debetregel is niet toegestaan voor een 303-declaratie.",
        '8901' => "BEGINDATUM PERIODE ontbreekt of is onjuist",
        '8902' => "EINDDATUM PERIODE ontbreekt of is onjuist",
        '9001' => "Bericht voldoet niet aan technische regel 1",
        '9002' => "Bericht voldoet niet aan technische regel 2",
        '9006' => "Bericht voldoet niet aan technische regel 6",
        '9014' => "Bericht voldoet niet aan technische regel 14",
        '9015' => "Bericht voldoet niet aan technische regel 15",
        '9016' => "Bericht voldoet niet aan technische regel 16",
        '9017' => "Bericht voldoet niet aan technische regel 17",
        '9018' => "Bericht voldoet niet aan technische regel 18",
        '9019' => "Bericht voldoet niet aan technische regel 19",
        '9020' => "Bericht voldoet niet aan technische regel 20",
        '9021' => "Bericht voldoet niet aan technische regel 21",
        '9037' => "Bericht voldoet niet aan technische regel 37",
        '9039' => "Bericht voldoet niet aan technische regel 39",
        '9040' => "Bericht voldoet niet aan technische regel 40",
        '9041' => "Bericht voldoet niet aan technische regel 41",
        '9042' => "Bericht voldoet niet aan technische regel 42",
        '9046' => "Bericht voldoet niet aan technische regel 46",
        '9052' => "Bericht voldoet niet aan technische regel 52.",
        '9056' => "Bericht voldoet niet aan technische regel 56",
        '9061' => "Bericht voldoet niet aan technische regel 61",
        '9063' => "Bericht voldoet niet aan technische regel 63",
        '9064' => "Bericht voldoet niet aan technische regel 64",
        '9065' => "Bericht voldoet niet aan technische regel 65.",
        '9066' => "Bericht voldoet niet aan technische regel 66",
        '9069' => "Bericht voldoet niet aan technische regel 69",
        '9070' => "Bericht voldoet niet aan technische regel 70",
        '9071' => "Bericht voldoet niet aan technische regel 71",
        '9073' => "Bericht voldoet niet aan technische regel 73",
        '9074' => "Bericht voldoet niet aan technische regel 74",
        '9078' => "Bericht voldoet niet aan technische regel 78",
        '9085' => "Bericht voldoet niet aan technische regel 85",
        '9086' => "Bericht voldoet niet aan technische regel 86",
        '9091' => "Bericht voldoet niet aan technische regel 91",
        '9097' => "Bericht voldoet niet aan technische regel 97",
    ];
}