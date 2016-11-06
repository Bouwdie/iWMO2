<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\Grondslag;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Grondslagen
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Grondslagen
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'De verzameling van coderingen wat ten grondslag ligt aan het indicatiebesluit met betrekking tot de zorg voor een cliënt.';
    /**
     * @var Grondslag|null
     * WTF .. numeric vars? Who made this up?
     */
    private $grondslag01;
    /**
     * @var Grondslag|null
     * Optional
     */
    private $grondslag02;

    /**
     * Grondslagen constructor.
     * @param Grondslag $grondslag01
     * @param Grondslag|null $grondslag02
     */
    public function __construct(
        Grondslag $grondslag01,
        Grondslag $grondslag02 = null
    ) {
        $this->grondslag01 = $grondslag01;
        if ($grondslag02 !== null) {
            $this->grondslag02 = $grondslag02;
        }
    }
}