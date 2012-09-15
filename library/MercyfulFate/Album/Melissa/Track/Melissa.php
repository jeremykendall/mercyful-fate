<?php

namespace MercyfulFate\Album\Melissa\Track;

class Melissa
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
    protected $melissa;
    
    public function __construct(\MercyfulFate\KingDiamond $king, \MercyfulFate\Witch\Melissa $melissa, \MercyfulFate\Priest $priest)
    {
        $this->king = $king;
        $this->melissa = $melissa;
        $this->priest = $priest;
    }
    
    public function priestBurnsWitch()
    {
        $this->priest->burnAtStake($this->melissa);
    }
}
