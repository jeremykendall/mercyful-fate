<?php

namespace MercyfulFate;

class Witch implements \SplObserver
{
    /**
     * Witch's name
     *
     * @var string
     */
    protected $name;

    /**
     * Has the witch been burned at the stake?
     *
     * @var bool
     */
    protected $burned;

    /**
     * Has the witch entered another life?
     *
     * @var bool
     */
    protected $enteredAnotherLife;

    /**
     * Public constructor
     *
     * @param string $name               Witch's name
     * @param bool   $burned             True if witch has burned at stake
     * @param bool   $enteredAnotherLife True if witch is dead
     */
    public function __construct($name, $burned = false, $enteredAnotherLife = false)
    {
        $this->name = $name;
        $this->burned = $burned;
        $this->enteredAnotherLife = $enteredAnotherLife;
    }

    /**
     * If notified, Witch will burn and enter another life
     *
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        $this->setBurned(true);
        $this->setEnteredAnotherLife(true);
    }

    /**
     * Get witch's name
     *
     * @return string Witch's name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set witch's name
     *
     * @param string $name Witch's name
     */
    public function setName($name)
    {
        $this->name = $name;
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

    /**
     * Has the witch entered another life?
     *
     * @return bool True if the witch is dead
     */
    public function isEnteredAnotherLife()
    {
        return $this->enteredAnotherLife;
    }

    /**
     * Set enteredAnotherLife
     *
     * @param bool $enteredAnotherLife True if the witch is dead
     */
    public function setEnteredAnotherLife($enteredAnotherLife)
    {
        $this->enteredAnotherLife = $enteredAnotherLife;
    }
}
