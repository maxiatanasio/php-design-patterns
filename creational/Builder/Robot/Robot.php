<?php
/**
 * Created by PhpStorm.
 * User: simplex
 * Date: 2019-05-31
 * Time: 17:32
 */

namespace Creational\Builder\Robot;


class Robot implements RobotPlan
{

    /**
     * @var string
     */
    private $head;
    /**
     * @var string
     */
    private $torso;
    /**
     * @var string
     */
    private $arms;
    /**
     * @var string
     */
    private $legs;

    /**
     * @return string
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param string $head
     */
    public function setHead(string $head)
    {
        $this->head = $head;
    }

    /**
     * @return string
     */
    public function getTorso()
    {
        return $this->torso;
    }

    /**
     * @param string $torso
     */
    public function setTorso(string $torso)
    {
        $this->torso = $torso;
    }

    /**
     * @return string
     */
    public function getArms()
    {
        return $this->arms;
    }

    /**
     * @param string $arms
     */
    public function setArms(string $arms)
    {
        $this->arms = $arms;
    }

    /**
     * @return string
     */
    public function getLegs()
    {
        return $this->legs;
    }

    /**
     * @param string $legs
     */
    public function setLegs(string $legs)
    {
        $this->legs = $legs;
    }

}