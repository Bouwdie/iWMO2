<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Datatypes\Logisch\Naam;
use Hyperized\Iwmo2\Datatypes\Logisch\NaamCode;
use Hyperized\Iwmo2\Datatypes\Logisch\Voorvoegsel;
use JMS\Serializer\SerializerBuilder;
use PHPUnit_Framework_TestCase;

/**
 * Class AchternaamTest
 */
class AchternaamTest extends PHPUnit_Framework_TestCase
{
    public function testSerialize()
    {
        $serializer = SerializerBuilder::create()->build();

        $achterNaam = new Achternaam(
            new Naam('hoi'),
            new Voorvoegsel('de'),
            new NaamCode(3)
        );

        print $serializer->serialize($achterNaam, 'xml');
    }
}
