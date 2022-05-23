<?php
require_once("account.php");
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar(){
        if ($this->passenger != null){
            echo "Licencia: $this->license Driver: {$this->driver->name} <br>";
        }
    }

    public function getPassenger() {
        return $this->passenger;
    }

    public function setPassenger($passenger) {
        if ($passenger == 4){
            $this->passenger = $passenger;
        }
        else {
            echo "necesitas asignar 4 pasajeros";
        }
    }
}
?>