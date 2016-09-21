<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD232
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD232 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "JURIDISCHE STATUS";
    /**
     * @var string
     */
    private $beschrijving = "Juridische situatie die voor de cliënt van toepassing is op het moment van indicatiestelling.";

    /**
     * Juridische status
     */
    const code = [
        '01' => "Rechterlijke machtiging (rm) voorlopig / voortgezette machtiging",
        '02' => "RM op eigen verzoek",
        '03' => "RM met voorwaardelijk ontslag",
        '04' => "Onder toezichtstelling (ots)",
        '05' => "In bewaring stelling (ibs)",
        '06' => "Voogdij",
        '07' => "Bewindvoering",
        '08' => "Mentorschap",
        '09' => "Onder curatele stelling",
        '10' => "Zaakwaarneming",
        '11' => "Strafrechterlijke justitiële contacten: tbs",
        '12' => "Strafrechterlijke justitiële contacten: overig",
    ];
}