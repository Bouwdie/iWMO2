<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;


class TijdTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new Tijd('14:23:26');
    }

    public function testTijdInstanceOf()
    {
        $this->assertInstanceOf(Tijd::class, $this->object);
    }
}
