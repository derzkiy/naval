<?php

namespace ShipBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ShipBundle\Entity\Deck;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ship
 *
 * @ORM\Table(name="ship")
 * @ORM\Entity(repositoryClass="ShipBundle\Repository\ShipRepository")
 */
class Ship
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
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="string", length=255)
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    private $icon;

    /**
     * @var int
     *
     * @ORM\Column(name="image", type="integer")
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="br", type="integer")
     */
    private $br;

    /**
     * @var int
     *
     * @ORM\Column(name="max_speed", type="float")
     */
    private $maxSpeed;

    /**
     * @var int
     *
     * @ORM\Column(name="turn_rate", type="float")
     */
    private $turnRate;

    /**
     * @var int
     *
     * @ORM\Column(name="max_crew", type="integer")
     */
    private $maxCrew;

    /**
     * @var int
     *
     * @ORM\Column(name="hold_capaciry", type="integer")
     */
    private $holdCapacity;

    /**
     * @var int
     *
     * @ORM\Column(name="hold_slots", type="smallint")
     */
    private $holdSlots;

    /**
     * @var int
     *
     * @ORM\Column(name="hp_sail", type="smallint")
     */
    private $hpSail;

    /**
     * @var int
     *
     * @ORM\Column(name="hp_side", type="smallint")
     */
    private $hpSide;

    /**
     * @var int
     *
     * @ORM\Column(name="hp_stern", type="smallint")
     */
    private $hpStern;

    /**
     * @var int
     *
     * @ORM\Column(name="hp_bow", type="smallint")
     */
    private $hpBow;

    /**
     * @ORM\ManyToMany(targetEntity="Deck")
     * @ORM\JoinTable(name="ships_decks",
     *      joinColumns={@ORM\JoinColumn(name="ship_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="deck_id", referencedColumnName="id")}
     *      )
     */
    private $decks;

    public function __construct() {
        $this->decks = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Ship
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
     * Set class
     *
     * @param string $class
     *
     * @return Ship
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return Ship
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set icon
     *
     * @param integer $icon
     *
     * @return Ship
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return integer
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set image
     *
     * @param integer $image
     *
     * @return Ship
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return int
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set br
     *
     * @param integer $br
     *
     * @return Ship
     */
    public function setBr($br)
    {
        $this->br = $br;

        return $this;
    }

    /**
     * Get br
     *
     * @return int
     */
    public function getBr()
    {
        return $this->br;
    }

    /**
     * Set maxSpeed
     *
     * @param float $maxSpeed
     *
     * @return Ship
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    /**
     * Get maxSpeed
     *
     * @return float
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set turnRate
     *
     * @param float $turnRate
     *
     * @return Ship
     */
    public function setTurnRate($turnRate)
    {
        $this->turnRate = $turnRate;

        return $this;
    }

    /**
     * Get turnRate
     *
     * @return float
     */
    public function getTurnRate()
    {
        return $this->turnRate;
    }

    /**
     * Set maxCrew
     *
     * @param integer $maxCrew
     *
     * @return Ship
     */
    public function setMaxCrew($maxCrew)
    {
        $this->maxCrew = $maxCrew;

        return $this;
    }

    /**
     * Get maxCrew
     *
     * @return integer
     */
    public function getMaxCrew()
    {
        return $this->maxCrew;
    }

    /**
     * Set holdCapacity
     *
     * @param integer $holdCapacity
     *
     * @return Ship
     */
    public function setHoldCapacity($holdCapacity)
    {
        $this->holdCapacity = $holdCapacity;

        return $this;
    }

    /**
     * Get holdCapacity
     *
     * @return integer
     */
    public function getHoldCapacity()
    {
        return $this->holdCapacity;
    }

    /**
     * Set holdSlots
     *
     * @param integer $holdSlots
     *
     * @return Ship
     */
    public function setHoldSlots($holdSlots)
    {
        $this->holdSlots = $holdSlots;

        return $this;
    }

    /**
     * Get holdSlots
     *
     * @return integer
     */
    public function getHoldSlots()
    {
        return $this->holdSlots;
    }

    /**
     * Set hpSail
     *
     * @param integer $hpSail
     *
     * @return Ship
     */
    public function setHpSail($hpSail)
    {
        $this->hpSail = $hpSail;

        return $this;
    }

    /**
     * Get hpSail
     *
     * @return integer
     */
    public function getHpSail()
    {
        return $this->hpSail;
    }

    /**
     * Set hpSide
     *
     * @param integer $hpSide
     *
     * @return Ship
     */
    public function setHpSide($hpSide)
    {
        $this->hpSide = $hpSide;

        return $this;
    }

    /**
     * Get hpSide
     *
     * @return integer
     */
    public function getHpSide()
    {
        return $this->hpSide;
    }

    /**
     * Set hpStern
     *
     * @param integer $hpStern
     *
     * @return Ship
     */
    public function setHpStern($hpStern)
    {
        $this->hpStern = $hpStern;

        return $this;
    }

    /**
     * Get hpStern
     *
     * @return integer
     */
    public function getHpStern()
    {
        return $this->hpStern;
    }

    /**
     * Set hpBow
     *
     * @param integer $hpBow
     *
     * @return Ship
     */
    public function setHpBow($hpBow)
    {
        $this->hpBow = $hpBow;

        return $this;
    }

    /**
     * Get hpBow
     *
     * @return integer
     */
    public function getHpBow()
    {
        return $this->hpBow;
    }

    /**
     * Add deck
     *
     * @param \ShipBundle\Entity\Deck $deck
     *
     * @return Ship
     */
    public function addDeck(\ShipBundle\Entity\Deck $deck)
    {
        $this->decks[] = $deck;

        return $this;
    }

    /**
     * Remove deck
     *
     * @param \ShipBundle\Entity\Deck $deck
     */
    public function removeDeck(\ShipBundle\Entity\Deck $deck)
    {
        $this->decks->removeElement($deck);
    }

    /**
     * Get decks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDecks()
    {
        return $this->decks;
    }
}
