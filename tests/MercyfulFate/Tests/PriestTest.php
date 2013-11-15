<?php

namespace MercyfulFate\Tests;

use MercyfulFate\Priest;

class PriestTest extends \PHPUnit_Framework_TestCase
{
    protected $priest;

    protected $observer;

    protected function setUp()
    {
        $this->priest = new Priest();
        $this->observer = new Observer();
    }

    public function testSplSubject()
    {
        $this->assertEmpty(count($this->priest->getObservers()));
        $this->priest->attach($this->observer);

        $observers = $this->priest->getObservers();
        $this->assertEquals(1, count($observers));
        $this->assertSame(
            $this->observer, 
            $observers[spl_object_hash($this->observer)]
        );

        $this->assertFalse($this->observer->getNotified());
        $this->priest->notify();
        $this->assertTrue($this->observer->getNotified());

        $this->priest->detach($this->observer);
        $observers = $this->priest->getObservers();
        $this->assertEmpty(count($observers));
    }
}

class Observer implements \SplObserver
{
    private $notified = false;

    public function update(\SplSubject $subject)
    {
        $this->notified = true;
    }

    public function getNotified()
    {
        return $this->notified;
    }
}
