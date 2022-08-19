public class Test {
    public static void main ( String [] args ) {

         Order order = new Order();
         Customer customer = new Customer();
         order.setObserver(customer);
         order.setData("123.5326,237.9277","6W 40th Street,NewYork ",10);
         customer.update(order);
         
    }
}
