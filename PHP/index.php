<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberVan.php");
require_once("account.php");
require_once("uberPool.php");
$uberX = new UberX("AWS543",new Account("Andrés Ortiz","RET423"),"Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->PrintDataCar();
$uberVan = new UberVan("OJL395", new Account("Raul Ramirez", "TDS364"),"Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->PrintDataCar();
?>