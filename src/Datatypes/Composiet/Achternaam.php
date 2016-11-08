<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;
use Hyperized\Iwmo2\Datatypes\Logisch\Naam;
use Hyperized\Iwmo2\Datatypes\Logisch\Voorvoegsel;
use Hyperized\Iwmo2\Datatypes\Logisch\NaamCode;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Achternaam
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 * @JMS\XmlRoot("CDT_Achternaam")
 * @JMS\XmlNamespace("http://www.istandaarden.nl/iwmo/2_1/basisschema/schema/2_1")
 */
class Achternaam
{
    use Meta;
    /**
     * @var string
     * @JMS\Exclude()
     */
    protected static $beschrijving = 'De achternaam van een natuurlijk persoon, aangeduid als Naam met Voorvoegsel en een NaamCode die het naamgebruik aangeeft.';

    /**
     * @var Naam|null
     * @JMS\XmlElement(cdata=false, namespace="http://www.istandaarden.nl/iwmo/2_1/basisschema/schema/2_0")
     * @JMS\SerializedName("Naam")
     * @JMS\Type("string")
     */
    private $naam;

    /**
     * @var Voorvoegsel|null
     * Optional
     * @JMS\XmlElement(cdata=false)
     * @JMS\SerializedName("Voorvoegsel")
     * @JMS\Type("string")
     */
    private $voorvoegsel;

    /**
     * @var NaamCode|null
     * @JMS\XmlElement(cdata=false)
     * @JMS\SerializedName("NaamCode")
     * @JMS\Type("string")
     */
    private $naamCode;

    /**
     * Achternaam constructor.
     * @param Naam $naam
     * @param Voorvoegsel|null $voorvoegsel
     * @param NaamCode $naamCode
     */
    public function __construct(
        Naam $naam,
        Voorvoegsel $voorvoegsel = null,
        NaamCode $naamCode
    ) {
        $this->naam = $naam;
        if ($voorvoegsel !== null) {
            $this->voorvoegsel = $voorvoegsel;
        }
        $this->naamCode = $naamCode;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if ($this->voorvoegsel !== null) {
            return $this->voorvoegsel->getValue()->getValue() . ' ' . $this->naam->getValue()->getValue();
        }
        return $this->naam->getValue()->getValue();
    }
}