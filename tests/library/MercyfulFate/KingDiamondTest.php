<?php

namespace MercyfulFate;

/**
 * Tests the premise of the Mercyful Fate song "Melissa" 
 */
class KingDiamondTest extends \PHPUnit_Framework_TestCase
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
     * @var Witch\Melissa
     */
    protected $witch;

    protected function setUp()
    {
        $this->king = new KingDiamond();
        $this->priest = new Priest();
        $this->priest->attach($this->king);
        $this->witch = new Witch\Melissa();
    }

    public function testKingSwearsRevengeOnPriest()
    {
        $this->assertFalse($this->witch->isBurned());
        $this->assertFalse($this->king->swearsRevenge());

        $this->priest->burnAtStake($this->witch);

        $this->assertTrue($this->witch->isBurned());
        $this->assertTrue($this->king->swearsRevenge());
    }

}
