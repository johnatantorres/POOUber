<?php
require_once('Car.php');
require_once('Account.php');
$car = new Car("AWS543",new Account("Andrés Herrera","RET423"));
$car->PrintDataCar();