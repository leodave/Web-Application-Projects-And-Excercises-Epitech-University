public class Order implements IObservable {
    protected String position;
    private String destination;
    private int timeBeforeArrival;
    private IObserver observer;
    
    public void setObserver(IObserver observer){
        this.observer = observer;
        System.out.println(this.observer);
    }
     public void deleteObserver(){
        this.observer = null;
     }
    public String getPosition(){
        return position;
    }
     public String getDestination(){
        return destination;
    }
     public int getTimeBeforeArrival(){
        return timeBeforeArrival;
    }
   
    public void setData(String pos, String des, int time) {
        this.position = pos;
        this.destination = des;
        this.timeBeforeArrival = time;
        //System.out.println(this.position);
    }
}
