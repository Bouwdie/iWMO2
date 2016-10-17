<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\Regel;
use Hyperized\Iwmo2\Datatypes\Logisch\Regelnummer;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Commentaar
 * Vrije tekst (bijvoorbeeld toelichting) in een bericht.
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Commentaar
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Vrije tekst (bijvoorbeeld toelichting) in een bericht.';
    /**
     * @var Regelnummer|null
     */
    private $nummer = null;
    /**
     * @var Regel|null
     */
    private $regel = null;

    /**
     * Commentaar constructor.
     * @param Regelnummer $nummer
     * @param Regel $regel
     */
    public function __construct(
        Regelnummer $nummer,
        Regel $regel
    ) {
        $this->nummer = $nummer;
        $this->regel = $regel;
    }


}