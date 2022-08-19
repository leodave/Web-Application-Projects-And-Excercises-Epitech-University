import java.util.ArrayList;
import java.util.Arrays;

public class Elf {
  private Toy dave;
  private ArrayList<GiftPaper> gift = new ArrayList<GiftPaper>();   
  //private Factory factory; 

    public void get(String toy) {
           if(dave == null )
            {
                
                if(toy.contains("teddy")){
                    dave = Factory.create("teddy"); 
                    System.out.println("What a nice one ! I would have liked to keep it ...");
                    return;
                }
                else if(toy.contains("gameboy")){
                    dave = Factory.create("gameboy");
                    System.out.println("What a nice one ! I would have liked to keep it ...");
                    //System.out.println(dave);
                    return;
                }
                else if(toy.contains("giftpapers")){
                    
                    toy = toy.replaceAll("[^0-9]", "");
                    
                    int num=Integer.parseInt(toy);
                    for (int i = 0; i < num; i++){
                        gift.add(Factory.getPaper());
                    }
                    System.out.println(gift);
                    return;
                }
                else {
                    System.out.println("Minute please ?! I'm not that fast .");
                }
                return;
            }
         
    }
     public void pack() {
         for (int f = 0; f < gift.size(); f++ ){
           if(gift.get(f).isEmpty()){
               gift.get(f).wrap(dave);
               //System.out.println(Arrays.toString(gift));
               //System.out.println(gift.size());
                gift.get(f).printToy();
                dave = null;
               return;
            } 
         }
        System.out.println("Wait ... I can 't pack it with my shirt .");

    }
}