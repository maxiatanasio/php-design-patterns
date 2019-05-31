# The Builder design patterns

This pattern is use to create objects made from a bunch of other objects.
Only the builder knows the specifics to build the object.

## Use cases

- When you want to create an object made up from other objects
- When you want to decouple the creation logic from the objects itself
- When you want to hide the creation of the parts from the client

## Robots example explained

We need to program a system which creates Robots of different types, for example SuperRobots.
Each type of Robot is compose of different parts, the head, the torso, the arms and the legs.


#### RobotBuilderInterface

This interface is responsible of defining which are the build methods that the directory have
to follow in order to make a new robot

#### RobotPlan

This interfaces defines the parts that made a Robot

#### Robot

The Robot class is the generic Robot model with it's head, torso, arms and legs property

#### SuperRobotBuilder

The SuperRobotBuilder class sets how this particular type of Robot is made. This defines a 
robot "model".

#### FlyRobotBuilder

The FlyRobotBuilder class is another type builder that creates another type of robot 

#### RobotBuilderDirector

The RobotBuilderDirectorClass knows how a Robot should be made and the steps needed.
