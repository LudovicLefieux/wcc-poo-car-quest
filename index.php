<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');

var_dump($bike);

$bike->setColor('red');
$bike->setCurrentSpeed(0);

var_dump($bike);

// Moving bike

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Moving car pink

$carPink = new Car('pink', 4, 'diesel');
var_dump($carPink);

echo '<br> Car\'s speed: ' . $carPink->getCurrentSpeed() . ' km/h' . '<br>';
echo $carPink->start();
echo '<br> Car\'s speed: ' . $carPink->getCurrentSpeed() . ' km/h' . '<br>';
echo $carPink->forward();
echo '<br> Car\'s speed: ' . $carPink->getCurrentSpeed() . ' km/h' . '<br>';
echo $carPink->brake();
echo '<br> Car\'s speed: ' . $carPink->getCurrentSpeed() . ' km/h' . '<br>';
echo $carPink->brake();

// Moving car green

$carGreen = new Car('green', 2, 'gasoline');
var_dump($carGreen);

echo '<br> Car\'s speed: ' . $carGreen->getCurrentSpeed() . ' km/h' . '<br>';
echo $carGreen->start();
echo '<br> Car\'s speed: ' . $carGreen->getCurrentSpeed() . ' km/h' . '<br>';
echo $carGreen->forward();
echo '<br> Car\'s speed: ' . $carGreen->getCurrentSpeed() . ' km/h' . '<br>';
echo $carGreen->brake();
echo '<br> Car\'s speed: ' . $carGreen->getCurrentSpeed() . ' km/h' . '<br>';
echo $carGreen->brake();