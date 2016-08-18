<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD467
{
    use Meta;
    private $titel = "STATUS AANLEVERING";
    private $beschrijving = "Indicatie over de status van de informatie in het record.";

    const code = [
        1 => "Eerste aanlevering",
        2 => "Gewijzigde aanlevering",
        3 => "Verwijderen aanlevering",
        9 => "Niet van toepassing (ongewijzigd)",
    ];
}