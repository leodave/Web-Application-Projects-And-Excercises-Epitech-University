public class Panini extends Sandwich{
   double price = 3.50;
   boolean vegetarian = true;
 String[] ingredients = {"tomato" , "salad" , "cucumber" ,"avocado" , "cheese"};
 @Override
 public double getPrice(){
     return price;
 }
 public int getCalories(){
     return 0;
 }
}
