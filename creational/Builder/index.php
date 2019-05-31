<?php

namespace Creational\Builder;

require_once __DIR__ . '/../../vendor/autoload.php';

use Creational\Builder\Robot\FlyRobotBuilder;
use Creational\Builder\Robot\RobotBuilderDirector;
use Creational\Builder\Robot\SuperRobotBuilder;

$superRobotBuilder = new SuperRobotBuilder();
$flyRobotBuilder = new FlyRobotBuilder();

$robotBuilderDirector = new RobotBuilderDirector();

$superRobot = $robotBuilderDirector->makeRobot($superRobotBuilder);

$flyRobot = $robotBuilderDirector->makeRobot($flyRobotBuilder);

print_r($superRobot);

print_r($flyRobot);