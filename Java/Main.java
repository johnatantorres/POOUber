
package Java;
class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        Car car = new Car("AMQ123", new Account("Andrés Herrera","AND123"));
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car("QWE643", new Account("Andrea Herrera", "ANDA874"));
        car2.passenger = 3;
        car2.printDataCar();
    }
}