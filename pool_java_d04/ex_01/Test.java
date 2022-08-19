public class Test {
    public static void main ( String [] args ) {
    Food bread = new Bread (2 , 50) ;
    System.out.println("The bread costs" + bread.getPrice() + "euros and contains " + bread.getCalories() + "calories.") ;
    }
}
