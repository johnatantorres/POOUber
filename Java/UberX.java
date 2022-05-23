package Java;

class UberX extends Car {
    String brand;
    String model;


    public UberX(String license, Account driver, String brand, String model){
        super(license, driver);
        this.brand = brand;
        this.model = model;
    }
    
    @Override
    void printDataCar() {
        if(passenger != null) {
            System.out.println("Brand: " + brand + " Model: " + model + " Passengers: " + passenger);
        }
    }
}
