<?php

namespace ShipBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cannon
 *
 * @ORM\Table(name="cannon")
 * @ORM\Entity(repositoryClass="ShipBundle\Repository\CannonRepository")
 */
class Cannon
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
     * @var int
     *
     * @ORM\Column(name="caliber", type="integer")
     */
    private $caliber;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float")
     */
    private $weight;

    /**
     * @var int
     *
     * @ORM\Column(name="penetration50m", type="integer")
     */
    private $penetration50m;

    /**
     * @var int
     *
     * @ORM\Column(name="penetration100m", type="integer")
     */
    private $penetration100m;

    /**
     * @var int
     *
     * @ORM\Column(name="penetration250m", type="integer")
     */
    private $penetration250m;

    /**
     * @var int
     *
     * @ORM\Column(name="penetration500m", type="integer")
     */
    private $penetration500m;

    /**
     * @var int
     *
     * @ORM\Column(name="penetration750m", type="integer")
     */
    private $penetration750m;

    /**
     * @var int
     *
     * @ORM\Column(name="penetration1000m", type="integer")
     */
    private $penetration1000m;

    /**
     * @var int
     *
     * @ORM\Column(name="reload_time", type="integer")
     */
    private $reloadTime;

    /**
     * @var int
     *
     * @ORM\Column(name="damage", type="integer")
     */
    private $damage;

    /**
     * @var int
     *
     * @ORM\Column(name="class", type="integer")
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set caliber
     *
     * @param integer $calibrer
     *
     * @return Cannon
     */
    public function setCaliber($caliber)
    {
        $this->caliber = $caliber;

        return $this;
    }

    /**
     * Get caliber
     *
     * @return int
     */
    public function getCaliber()
    {
        return $this->caliber;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return Cannon
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set penetration50m
     *
     * @param integer $penetration50m
     *
     * @return Cannon
     */
    public function setPenetration50m($penetration50m)
    {
        $this->penetration50m = $penetration50m;

        return $this;
    }

    /**
     * Get penetration50m
     *
     * @return int
     */
    public function getPenetration50m()
    {
        return $this->penetration50m;
    }

    /**
     * Set penetration100m
     *
     * @param integer $penetration100m
     *
     * @return Cannon
     */
    public function setPenetration100m($penetration100m)
    {
        $this->penetration100m = $penetration100m;

        return $this;
    }

    /**
     * Get penetration100m
     *
     * @return int
     */
    public function getPenetration100m()
    {
        return $this->penetration100m;
    }

    /**
     * Set penetration250m
     *
     * @param integer $penetration250m
     *
     * @return Cannon
     */
    public function setPenetration250m($penetration250m)
    {
        $this->penetration250m = $penetration250m;

        return $this;
    }

    /**
     * Get penetration250m
     *
     * @return int
     */
    public function getPenetration250m()
    {
        return $this->penetration250m;
    }

    /**
     * Set penetration500m
     *
     * @param integer $penetration500m
     *
     * @return Cannon
     */
    public function setPenetration500m($penetration500m)
    {
        $this->penetration500m = $penetration500m;

        return $this;
    }

    /**
     * Get penetration500m
     *
     * @return int
     */
    public function getPenetration500m()
    {
        return $this->penetration500m;
    }

    /**
     * Set penetration750m
     *
     * @param integer $penetration750m
     *
     * @return Cannon
     */
    public function setPenetration750m($penetration750m)
    {
        $this->penetration750m = $penetration750m;

        return $this;
    }

    /**
     * Get penetration750m
     *
     * @return int
     */
    public function getPenetration750m()
    {
        return $this->penetration750m;
    }

    /**
     * Set penetration1000m
     *
     * @param integer $penetration1000m
     *
     * @return Cannon
     */
    public function setPenetration1000m($penetration1000m)
    {
        $this->penetration1000m = $penetration1000m;

        return $this;
    }

    /**
     * Get penetration1000m
     *
     * @return int
     */
    public function getPenetration1000m()
    {
        return $this->penetration1000m;
    }

    /**
     * Set reloadTime
     *
     * @param integer $reloadTime
     *
     * @return Cannon
     */
    public function setReloadTime($reloadTime)
    {
        $this->reloadTime = $reloadTime;

        return $this;
    }

    /**
     * Get reloadTime
     *
     * @return int
     */
    public function getReloadTime()
    {
        return $this->reloadTime;
    }

    /**
     * Set damage
     *
     * @param integer $damage
     *
     * @return Cannon
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage
     *
     * @return int
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set class
     *
     * @param integer $class
     *
     * @return Cannon
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return int
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Cannon
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}
