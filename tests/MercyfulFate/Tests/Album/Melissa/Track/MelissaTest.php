<?php

namespace MercyfulFate\Tests\Album\Melissa\Track;

use MercyfulFate\KingDiamond;
use MercyfulFate\Priest;
use MercyfulFate\Witch;
use MercyfulFate\Album\Melissa\Track\Melissa as TrackMelissa;

class MelissaTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var KingDiamond
     */
    protected $king;

    /**
     * @var Priest
     */
    protected $priest;

    /**
     * @var Witch
     */
    protected $witch;

    /**
     * @var Melissa The song
     */
    protected $track;

    protected function setUp()
    {
        $this->king = new KingDiamond();
        $this->witch = new Witch('Melissa');
        $this->priest = new Priest();
        $this->priest->attach($this->king);
        $this->priest->attach($this->witch);

        $this->track = new TrackMelissa($this->king, $this->witch, $this->priest);
    }

    protected function tearDown()
    {
        $this->track = null;
    }

    public function testBurnMelissa()
    {
        $this->assertEquals('Melissa', $this->witch->getName());
        $this->assertFalse($this->witch->isBurned());
        $this->assertFalse($this->witch->isEnteredAnotherLife());
        $this->assertFalse($this->king->swearsRevenge());

        $this->track->priestBurnsWitchAtStake();

        $this->assertTrue($this->witch->isBurned());
        $this->assertTrue($this->witch->isEnteredAnotherLife());
        $this->assertTrue($this->king->swearsRevenge());
    }

    public function testGetLyrics()
    {
        $lyrics = $this->track->getLyrics();
        $this->assertInternalType('string', $lyrics);
        $this->assertContains('Melissa, you were the queen of the night', $lyrics);
        $this->assertContains('Melissa has entered another life', $lyrics);
    }

    public function testGetLyricsSource()
    {
        $this->assertEquals(
            'http://www.darklyrics.com/lyrics/mercyfulfate/melissa.html#7',
            $this->track->getLyricsSource()
        );
    }
}
