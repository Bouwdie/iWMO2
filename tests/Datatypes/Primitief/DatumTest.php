<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

class DateTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        date_default_timezone_set('Europe/Amsterdam');
        $this->object = new Datum(date('Y-m-d'));
    }

    public function testDatumInstanceOf()
    {
        $this->assertInstanceOf(Datum::class, $this->object);
    }

    public function testIncorrectRange() {
        $this->expectException(\Exception::class);
        $this->object->setWaarde('1700-13-32');
    }

    public function testCorrectRange() {
        $this->object->setWaarde('2001-12-31');
    }

    public function testIncorrectFormat() {
        $this->expectException(\Exception::class);
        $this->object->setWaarde('01-01-2012');
    }

    public function testIncorrectData() {
        $this->expectException(\Exception::class);
        $this->object->setWaarde(['hello', 'world', 1337]);
    }

    public function testGetter() {
        $this->assertSame($this->object->getWaarde(), date('Y-m-d'));
    }
}
