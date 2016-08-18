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
}
