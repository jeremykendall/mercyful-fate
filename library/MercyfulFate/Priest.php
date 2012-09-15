<?php

namespace MercyfulFate;

class Priest implements \SplSubject
{

    /**
     * An array of SplObserver objects to notify of witch burnings
     *
     * @var array
     */
    private $observers;

    /**
     * Burn the witch! Burn her! Burn her!
     * 
     * @param Witch $witch 
     * @return void
     */
    public function burnAtStake(Witch $witch)
    {
        $witch->setBurned(true);
        $this->notify();
    }

    /**
     * Attaches an SplObserver to the Priest to be notified when a witch
     * is burned at the stake.
     *
     * @param \SplObserver The observer to attach
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        $this->observers[$id] = $observer;
    }

    /**
     * Detaches the SplObserver from the Priest so it will no longer be
     * notified when a witch is burned
     *
     * @param \SplObserver The observer to detach
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        unset($this->observers[$id]);
    }

    /**
     * Notify all observers of the witch burning
     *
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}