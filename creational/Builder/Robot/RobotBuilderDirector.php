<?php
/**
 * Created by PhpStorm.
 * User: simplex
 * Date: 2019-05-31
 * Time: 17:40
 */

namespace Creational\Builder\Robot;


/**
 * Class RobotBuilderDirector
 * @package Creational\Builder\Robot
 */
class RobotBuilderDirector
{

    /**
     * @var RobotBuilderInterface
     */
    private $robotBuilder;

    /**
     * RobotBuilderDirector constructor.
     * @param RobotBuilderInterface $robotBuilder
     */
    public function __construct(RobotBuilderInterface $robotBuilder)
    {
        $this->robotBuilder = $robotBuilder;
    }

    /**
     * @return mixed
     */
    public function getRobot() {
        return $this->robotBuilder->getRobot();
    }

    /**
     *
     */
    public function makeRobot() {
        $this->robotBuilder->buildRobotHead();
        $this->robotBuilder->buildRobotTorso();
        $this->robotBuilder->buildRobotArms();
        $this->robotBuilder->buildRobotLegs();
    }


}