<?php

namespace Creational\Builder;

require_once __DIR__ . '/../../vendor/autoload.php';

use Creational\Builder\Robot\RobotBuilderDirector;
use Creational\Builder\Robot\SuperRobotBuilder;

$superRobotBuilder = new SuperRobotBuilder();

$robotBuilderDirector = new RobotBuilderDirector($superRobotBuilder);

$robotBuilderDirector->makeRobot();

$robot = $robotBuilderDirector->getRobot();

print_r($robot);