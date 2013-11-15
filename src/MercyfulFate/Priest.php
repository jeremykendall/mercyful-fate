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
     * @return void
     */
    public function burnWitchAtStake()
    {
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
     * Detaches the SplObserver
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
     * Notify all observers
     *
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Gets observers
     *
     * @return array Observers
     */
    public function getObservers()
    {
        return $this->observers;
    }
}
