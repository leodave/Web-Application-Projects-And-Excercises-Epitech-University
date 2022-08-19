

public class GiftPaper extends Toy {
    private Toy toy;
    
    public void wrap(Toy newToy) {
        this.toy = newToy; 
    }
    public boolean isEmpty(){
        if(toy == null){
            return true;
        }else{
            return false;
        }
    }
    public void printToy(){
        if(!(toy == null))
        System.out.println(toy.getTitle());
    }

}
