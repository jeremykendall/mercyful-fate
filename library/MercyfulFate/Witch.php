<?php

namespace MercyfulFate;

class Witch
{
    /**
     * Has the witch been burned at the stake?
     * 
     * @var bool
     */
    protected $burned;
    
    public function __construct($burned = false)
    {
        $this->burned = $burned;
    }
    
    /**
     * Has the witch been burned at the stake?
     * 
     * @return bool
     */
    public function isBurned()
    {
        return $this->burned;
    }
    
    /**
     * @param bool $burned 
     */
    public function setBurned($burned)
    {
        $this->burned = $burned;
    }
    
}
