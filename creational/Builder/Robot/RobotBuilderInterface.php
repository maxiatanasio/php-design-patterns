<?php

namespace Creational\Builder\Robot;

/**
 * Interface RobotBuilderInterface
 * @package Creational\Builder\Robot
 */
interface RobotBuilderInterface {

    /**
     * @return mixed
     */
    public function buildRobotHead();

    /**
     * @return mixed
     */
    public function buildRobotTorso();

    /**
     * @return mixed
     */
    public function buildRobotArms();

    /**
     * @return mixed
     */
    public function buildRobotLegs();

    /**
     * @return mixed
     */
    public function getRobot();

}