public class Bread implements Food {
    private int price = 0;
    private int calories = 0;
    private int bakingTime = 0;
    
    public Bread( int newPrice, int newCalories){
            price = newPrice;
            calories = newCalories;
    }
    @Override
    public int getPrice(){
        return this.price;
    }
     public int getCalories(){
        return this.calories;
    }
     public int getBakingTime(){
        return this.bakingTime;
    }

}
