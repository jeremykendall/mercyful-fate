<?php

namespace MercyfulFate\Album\Melissa\Track;

use MercyfulFate\KingDiamond;
use MercyfulFate\Priest;
use MercyfulFate\Witch\Melissa as WitchMelissa;
use MercyfulFate\Album\Melissa\Track\Melissa as TrackMelissa;

class MelissaTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var MercyfulFate\KingDiamond
     */
    protected $king;

    /**
     * @var MercyfulFate\Priest
     */
    protected $priest;

    /**
     * @var MercyfulFate\Witch\Melissa
     */
    protected $witch;

    /**
     * @var MercyfulFate\Album\Melissa\Track\Melissa
     */
    protected $trackMelissa;

    protected function setUp()
    {
        $this->king = new KingDiamond();
        $this->priest = new Priest();
        $this->priest->attach($this->king);
        $this->witch = new WitchMelissa();
        $this->trackMelissa = new TrackMelissa($this->king, $this->witch, $this->priest);
    }

    protected function tearDown()
    {
        $this->trackMelissa = null;
    }

    public function testBurnMelissa()
    {
        $this->assertFalse($this->witch->isBurned());
        $this->assertFalse($this->king->swearsRevenge());

        $this->trackMelissa->priestBurnsWitch();

        $this->assertTrue($this->witch->isBurned());
        $this->assertTrue($this->king->swearsRevenge());
    }

}
