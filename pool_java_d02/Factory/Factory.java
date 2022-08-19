

public class Factory {
    
    public static Toy create(String newToy) {
        if (newToy.equals("teddy")){
            return new TeddyBear();   
        } else if(newToy.equals("gameboy")){
            return new GameBoy();     
        }else {
        return null;
        }
       
    }
    public static GiftPaper getPaper() {
          return new GiftPaper();
          
    }
}
