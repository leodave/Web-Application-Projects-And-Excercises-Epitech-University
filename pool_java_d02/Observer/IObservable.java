public interface IObservable {

    public void setObserver(IObserver observer);
    public void deleteObserver();
    //  public static boolean notifyObserver() {
    //      if(iObserver == null){
    //          return false;
    //      }else{
    //          return true;
    //      }
        
    //  }
}
