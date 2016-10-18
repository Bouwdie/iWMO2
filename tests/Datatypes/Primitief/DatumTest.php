<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

/**
 * Class DateTest
 * @package Hyperized\Iwmo2\Datatypes\Primitief
 */
class DateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var
     */
    protected $object;

    public function testInstanceOf()
    {
        $this->object = new Datum(date('Y-m-d'));
        static::assertInstanceOf(Datum::class, $this->object);
    }

    public function testCorrectRange() {
        $this->object = new Datum('2001-12-31');
    }

    public function testIncorrectRange() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Datum('1700-13-32');
    }

    public function testIncorrectFormat() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Datum('01-01-2012');
    }

    public function testIncorrectData() {
        $this->expectException(\TypeError::class);
        $this->object = new Datum(['hello', 'world', 1337]);
    }

    public function testGetter() {
        $this->object = new Datum(date('Y-m-d'));
        static::assertSame($this->object->getValue(), date('Y-m-d'));
    }
}
