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
     * @param RobotBuilderInterface $robotBuilder
     * @return Robot
     */
    public function makeRobot(RobotBuilderInterface $robotBuilder) {
        $robotBuilder->buildRobotHead();
        $robotBuilder->buildRobotTorso();
        $robotBuilder->buildRobotArms();
        $robotBuilder->buildRobotLegs();

        return $robotBuilder->getRobot();
    }


}