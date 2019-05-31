<?php

namespace Creational\Builder\Robot;

/**
 * Class SuperRobotBuilder
 * @package Creational\Builder\Robot
 */
class SuperRobotBuilder implements RobotBuilderInterface
{
    /**
     * @var Robot
     */
    private $robot;

    /**
     * SuperRobotBuilder constructor.
     */
    public function __construct(){
        $this->robot = new Robot();
    }

    /**
     * @return mixed|void
     */
    public function buildRobotHead()
    {
        $this->robot->setHead('Metal fire breather helmet');
    }

    /**
     * @return mixed|void
     */
    public function buildRobotTorso()
    {
        $this->robot->setTorso("High density armor");
    }

    /**
     * @return mixed|void
     */
    public function buildRobotArms()
    {
        $this->robot->setArms('Misil punch gloves');
    }

    /**
     * @return mixed|void
     */
    public function buildRobotLegs()
    {
        $this->robot->setLegs('Power jumper legs');
    }

    /**
     * @return Robot|mixed
     */
    public function getRobot()
    {
        return $this->robot;
    }
}