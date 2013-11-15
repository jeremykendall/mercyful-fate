<?php

namespace MercyfulFate;

interface TrackInterface
{
    /**
     * Gets track lyrics
     *
     * @return string Track lyrics
     */
    public function getLyrics();

    /**
     * Gets lyrics source (website, transcription, etc.)
     *
     * @return string Lyrics source
     */
    public function getLyricsSource();
}
