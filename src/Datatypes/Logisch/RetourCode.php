<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class RetourCode
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class RetourCode extends AbstractLogischStringLengthEnumeration
{
    /**
     * @var string
     */
    protected static $beschrijving = 'Melding in een iWmo-retourbericht. Het betreft een code die in een retourbericht het resultaat van de beoordeling van een (deel van een) ontvangen bericht weergeeft.';
    /**
     * @var string
     */
    protected $enumeration = 'WJ001';
    /**
     * @var int
     */
    protected $maxLength = 4;
}