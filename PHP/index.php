<?php
require_once("car.php");
require_once("uberX.php");
require_once("account.php");
require_once("uberPool.php");
$uberX = new UberX("AWS543",new Account("Andrés Herrera","RET423"),"Chevrolet", "Spark");
$uberX->PrintDataCar();
$uberPool = new UberPool("ATR543",new Account("Andrés Hernandez","RFJ423"),"Dodge", "Attitude");
$uberPool->PrintDataCar();
?>