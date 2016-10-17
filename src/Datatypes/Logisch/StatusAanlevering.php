<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class StatusAanlevering
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class StatusAanlevering extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    private $beschrijving = 'Indicatie over de status van de informatie in het record.';
    /**
     * @var int
     */
    protected $maxLength = 1;

    /**
     * @var string
     */
    protected $enumeration = 'COD467';
}