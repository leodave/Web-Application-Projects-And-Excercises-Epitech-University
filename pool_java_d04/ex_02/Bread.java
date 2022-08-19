public class Bread implements Food {
    protected Double price = 0.0;
    protected int calories = 0;
    private int bakingTime = 0;
    
    public Bread( Double newPrice, int newCalories){
            price = newPrice;
            calories = newCalories;
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

