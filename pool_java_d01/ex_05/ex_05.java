
import java.util.ArrayList;
public class ex_05 {
public static void main ( String [] args ) 
    {
         System.out.println(myGetArgs("hello","world"));
    }
        public static ArrayList<String>myGetArgs( String ... var ) 
    {
            ArrayList<String> myArray= new ArrayList<String>();
            for (String str : var)
            {
                myArray.add(str);
            }
            return myArray;
            
    }
    
}