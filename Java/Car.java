package Java;

class Car {
    Integer id;
    String license;
    Account driver;
    protected Integer passenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }   

    void printDataCar() {
        if(passenger != null) {
            System.out.println("License: " + license + " Driver name: " + driver.name + " Passengers: " + passenger);
        }
    }

    public Integer getPassenger(){
        return passenger;
    }

    public void setPassenger(Integer passenger){
        if (passenger == 4) {
            this.passenger = passenger;
        }else{
            System.out.println("Necesitas asignar 4 pasajeros");
        }  
    }
}
