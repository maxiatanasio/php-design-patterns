<?php
/**
 * Created by PhpStorm.
 * User: simplex
 * Date: 2019-05-31
 * Time: 18:22
 */

namespace Creational\Builder\Robot;


class FlyRobotBuilder implements RobotBuilderInterface
{

    /**
     * @var Robot
     */
    private $robot;

    /**
     * FlyRobotBuilder constructor.
     * @param Robot $robot
     */
    public function __construct()
    {
        $this->robot = new Robot();
    }

    public function buildRobotHead()
    {
        $this->robot->setHead('Wing ears helmet');
    }

    public function buildRobotTorso()
    {
        $this->robot->setTorso('Metal flying wings');
    }

    public function buildRobotArms()
    {
        $this->robot->setArms('Feather arms');
    }

    public function buildRobotLegs()
    {
        $this->robot->setLegs('Aerial boots');
    }

    public function getRobot()
    {
        return $this->robot;
    }
}