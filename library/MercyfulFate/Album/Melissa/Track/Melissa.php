<?php

namespace MercyfulFate\Album\Melissa\Track;

use MercyfulFate\KingDiamond;
use MercyfulFate\Witch\Melissa as Witch;
use MercyfulFate\Priest;

class Melissa
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
    protected $melissa;

    public function __construct(KingDiamond $king, Witch $melissa, Priest $priest)
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
