<?php
require_once('car.php');
require_once('account.php');
$car = new Car("AWS543",new Account("Andrés Herrera","RET423"));
$car->PrintDataCar();
?>