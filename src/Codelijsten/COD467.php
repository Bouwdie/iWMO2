<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD467
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD467 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "STATUS AANLEVERING";
    /**
     * @var string
     */
    private $beschrijving = "Indicatie over de status van de informatie in het record.";

    /**
     * Status aanlevering
     */
    const code = [
        1 => "Eerste aanlevering",
        2 => "Gewijzigde aanlevering",
        3 => "Verwijderen aanlevering",
        9 => "Niet van toepassing (ongewijzigd)",
    ];
}