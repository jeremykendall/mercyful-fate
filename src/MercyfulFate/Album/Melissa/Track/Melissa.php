<?php

namespace MercyfulFate\Album\Melissa\Track;

use MercyfulFate\KingDiamond;
use MercyfulFate\Priest;
use MercyfulFate\TrackInterface;
use MercyfulFate\Witch;

class Melissa implements TrackInterface
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

    public function priestBurnsWitchAtStake()
    {
        $this->priest->burnWitchAtStake();
    }

    /**
     * {@inheritDoc}
     */
    public function getLyrics()
    {
        $lyrics = <<<__LYRICS__
[SOLO: MICHAEL]

I'm kneeling in front of the altar
Satan's cross upon the wall
Strange emptiness, a crystal ball between two candles
Melissa has entered another life

Melissa, you were mine
Melissa, you were the light

She was a witch
Why did they take you away?

[SOLO: HANK]

Melissa, you were the queen of the night
Melissa, you were my light
I swear revenge on the priest
The priest must die
He must die in the name of Hell

[SOLO: MICHAEL]

Melissa, can you hear me?
Melissa, are you there?

Nothing is left outside at the stake
They're taken her away from me



KING DIAMOND -- All Vocals
HANK SHERMANN -- Lead Guitars
MICHAEL DENNER -- Lead Guitars
TIMI GRUBBER -- Bass
KIM RUZZ -- Drums

Produced by Henrick Lund

Thanks to johnny.teresopolis for correcting tracks ## 4, 6 lyrics.
Thanks to kingdiamond321 for correcting track #6 lyrics.
Thanks to u.w, C.Santos for correcting track #7 lyrics.
__LYRICS__;

        return $lyrics;
    }

    /**
     * {@inheritDoc}
     */
    public function getLyricsSource()
    {
        return 'http://www.darklyrics.com/lyrics/mercyfulfate/melissa.html#7';
    }
}
