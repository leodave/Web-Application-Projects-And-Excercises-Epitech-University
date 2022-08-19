public class ex_02 {
public static void main(String[] args )
    {
        
        String result = getAngryDog(3);
        System.out.println(result);
     }
     public static String getAngryDog(int dog)
         {
             String wof = "";
            for(int i=0; i< dog; i++)
            {
               wof =  wof.concat("wof");
            }
            return(wof);
        }
   
}