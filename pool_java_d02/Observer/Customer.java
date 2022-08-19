import java.util.Observable;

public class Customer implements IObserver {
   
     @Override
      public void update(IObservable observable) {
        //casting
        Order order = (Order) observable;
       System.out.println(order.getPosition());
      //System.out.println(observable);
        System.out.println("position" + order.getPosition() + ","  + order.getTimeBeforeArrival() + "minutes before arrival at" + order.getDestination() );
      }
 }
