public class FrenchBaguette extends Bread implements Food {
    private Double price = 0.80;
    private int calories = 700;
    private int bakingTime = 20;
  
   public FrenchBaguette(){
    super( 0.80, 700  );
   }
    @Override
    public Double getPrice(){
        return this.price;
    }
     public int getCalories(){
        return this.calories;
    }
     public int getBakingTime(){
        return this.bakingTime;
    }
     
    
}
