public class Hamsandwich extends Sandwich{
    double price = 4.00;
    boolean vegetarian = false;
   String[] ingredients = {"tomato" , "salad" , "cheese" ,"ham" , "butter"};

    @Override
    public int getCalories() {
        return  0;
    }
    public double getPrice(){
        return price;
    }
}
