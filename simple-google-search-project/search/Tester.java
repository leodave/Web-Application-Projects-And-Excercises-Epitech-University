import java.util.Scanner;

//create a tester class
public class Tester {
    //create a main method for test
    public static void main(String[] args) {
        //create an object of the class "Identify"
        Identify word = new Identify();
        //call the "mysearch" method by putting in any input we want as a parameter";
        //word.mySearch("pr");
        Scanner scan = new Scanner(System.in);
        System.out.println("Enter Your Search Word");
        String userWord = scan.nextLine();
        word.mySearch(userWord);
        //scan.reset();



    }

}