<?php

namespace Creational\Builder\Robot;

/**
 * Interface RobotPlan
 * @package Creational\Builder\Robot
 */
interface RobotPlan {
    /**
     * @param string $head
     * @return mixed
     */
    public function setHead(string $head);

    /**
     * @param string $torso
     * @return mixed
     */
    public function setTorso(string $torso);

    /**
     * @param string $arms
     * @return mixed
     */
    public function setArms(string $arms);

    /**
     * @param string $legs
     * @return mixed
     */
    public function setLegs(string $legs);
}