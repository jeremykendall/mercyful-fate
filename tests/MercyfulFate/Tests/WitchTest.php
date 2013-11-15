<?php

namespace MercyfulFate\Tests;

use MercyfulFate\Witch;

class WitchTest extends \PHPUnit_Framework_TestCase
{
    protected $witch;

    protected function setUp()
    {
        $this->witch = new Witch('Kate Batts');
    }

    public function testGetSetName()
    {
        $this->assertEquals('Kate Batts', $this->witch->getName());
        $this->witch->setName('Melissa');
        $this->assertEquals('Melissa', $this->witch->getName());
    }
}
