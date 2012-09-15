<?php

namespace MercyfulFate;

class KingDiamond implements \SplObserver
{

    /**
     * Does King swear revenge upon the priest?
     * 
     * @var bool; 
     */
    private $swearsRevenge;
    
    public function __construct($swearsRevenge = false)
    {
        $this->swearsRevenge = $swearsRevenge;
    }

    /**
     * Does King swear revenge upon the priest?
     * 
     * @returns bool
     */
    public function swearsRevenge()
    {
        return $this->swearsRevenge;
    }

    /**
     * If notified, King will swear revenge
     * 
     * @param \SplSubject $subject 
     */
    public function update(\SplSubject $subject)
    {
        $this->swearsRevenge = true;
    }

}