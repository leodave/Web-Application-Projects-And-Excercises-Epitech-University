import java.util.ArrayList;
public class ex_03 {
public static void main( String [] args ) 
    {
        ArrayList<String> myArray = new ArrayList<String>();
        myArray.add("hello");
        myArray.add("world");
          printArray(myArray);
          
    }
 public static void printArray(ArrayList<String> myArray )
     {
         for(int i=0; i< myArray.size(); i++){
             System.out.println(myArray.get(i));
            }
            for (String str : myArray){
            System.out.println(str);
            }
     }
}