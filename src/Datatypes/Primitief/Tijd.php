<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Tijd
 * @package Hyperized\Iwmo2\Datatypes\Primitief
 */
class Tijd extends Datum
{
    use Meta;

    /**
     * @var string
     */
    public $beschrijving = 'Tijd';
    /**
     * @var string
     */
    public $formaat = 'H:i:s'; // 14:23:26
}