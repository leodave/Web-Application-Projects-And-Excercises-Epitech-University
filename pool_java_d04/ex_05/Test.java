public class Test {
    public static void main ( String [] args ) {
        Food bread = new FrenchBaguette () ;
        System.out.println("The softbread costs " + bread.getPrice() +" euros and contains " + bread.getCalories() + " calories.") ;
    }
}
