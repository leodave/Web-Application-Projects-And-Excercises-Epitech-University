public class FrenchBagguette extends Bread implements Food {
    private double price = 0.80;
    private int calories = 700;
    private int bakingTime = 20;
  
   public FrenchBagguette(){
    super( 0.80, 700  );
   }
    @Override
    public double getPrice(){
        return this.price;
    }
     public int getCalories(){
        return this.calories;
    }
     public int getBakingTime(){
        return this.bakingTime;
    }
     
    
}
