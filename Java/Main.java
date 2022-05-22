
package Java;
class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        UberX uberX = new UberX("AMQ123", new Account("Andrés Herrera","AND123"),"Chevrolet","Sonic");
        uberX.setPassenger(3);
        uberX.printDataCar();

        /*Car car2 = new Car("QWE643", new Account("Andrea Herrera", "ANDA874"));
        car2.passenger = 3;
        car2.printDataCar();*/
    }
}