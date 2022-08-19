public class Coke extends Drink {
     double price = 1.20;
     boolean can = true;

     @Override
     public double getPrice(){
          return price;
     }
     public int getCalories() {
          return  0;
     }
}
