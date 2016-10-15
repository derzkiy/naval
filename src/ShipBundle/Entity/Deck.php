<?php

namespace ShipBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deck
 *
 * @ORM\Table(name="deck")
 * @ORM\Entity(repositoryClass="ShipBundle\Repository\DeckRepository")
 */
class Deck
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="cannon_caliber_max", type="smallint")
     */
    private $cannonCaliberMax;

    /**
     * @var int
     *
     * @ORM\Column(name="cannon_caliber_min", type="smallint", nullable=true)
     */
    private $cannonCaliberMin;

    /**
     * @var int
     *
     * @ORM\Column(name="carronade_caliber_max", type="smallint", nullable=true)
     */
    private $carronadeCaliberMax;

    /**
     * @var int
     *
     * @ORM\Column(name="carronade_caliber_min", type="smallint", nullable=true)
     */
    private $carronadeCaliberMin;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="smallint")
     */
    private $count;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Deck
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set cannonCaliberMax
     *
     * @param integer $cannonCaliberMax
     *
     * @return Deck
     */
    public function setCannonCaliberMax($cannonCaliberMax)
    {
        $this->cannonCaliberMax = $cannonCaliberMax;

        return $this;
    }

    /**
     * Get cannonCaliberMax
     *
     * @return int
     */
    public function getCannonCaliberMax()
    {
        return $this->cannonCaliberMax;
    }

    /**
     * Set cannonCaliberMin
     *
     * @param integer $cannonCaliberMin
     *
     * @return Deck
     */
    public function setCannonCaliberMin($cannonCaliberMin)
    {
        $this->cannonCaliberMin = $cannonCaliberMin;

        return $this;
    }

    /**
     * Get cannonCaliberMin
     *
     * @return int
     */
    public function getCannonCaliberMin()
    {
        return $this->cannonCaliberMin;
    }

    /**
     * Set carronadeCaliberMax
     *
     * @param integer $carronadeCaliberMax
     *
     * @return Deck
     */
    public function setCarronadeCaliberMax($carronadeCaliberMax)
    {
        $this->carronadeCaliberMax = $carronadeCaliberMax;

        return $this;
    }

    /**
     * Get carronadeCaliberMax
     *
     * @return int
     */
    public function getCarronadeCaliberMax()
    {
        return $this->carronadeCaliberMax;
    }

    /**
     * Set carronadeCaliberMin
     *
     * @param integer $carronadeCaliberMin
     *
     * @return Deck
     */
    public function setCarronadeCaliberMin($carronadeCaliberMin)
    {
        $this->carronadeCaliberMin = $carronadeCaliberMin;

        return $this;
    }

    /**
     * Get carronadeCaliberMin
     *
     * @return int
     */
    public function getCarronadeCaliberMin()
    {
        return $this->carronadeCaliberMin;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return Deck
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
}
