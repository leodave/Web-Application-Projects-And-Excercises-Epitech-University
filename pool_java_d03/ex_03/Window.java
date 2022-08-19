import javax.swing.*;
import java.awt.*;
import java.util.ArrayList;
public class Window extends JFrame{
      private ArrayList<Button> buttons = new ArrayList<Button>();
         Button button0 = new Button("0", 10,10);
         Button button1 = new Button("1", 10,10);
         Button button2 = new Button("2", 20,10);
         Button button3 = new Button("3", 20,10);
         Button button4 = new Button("4", 20,10);
         Button button5 = new Button("5", 20,10);
         Button button6 = new Button("6", 20,10);
         Button button7 = new Button("7", 20,10);
         Button button8 = new Button("8", 20,10);
         Button button9 = new Button("9", 20,10);
         Button buttonadd = new Button("+", 20,10);
         Button buttonminus = new Button("-", 20,10);
         Button buttonmultiply = new Button("*", 20,10);
         Button buttondivide = new Button("/", 20,10);
         Button buttonresult = new Button("Result", 20,10);
         Button buttonreset = new Button("Reset", 20,10);
         JPanel panel = new JPanel(new GridLayout(6,3, 10, 10));     
         JLabel label = new JLabel("buttons");
    
      public Window(String title, int height, int width) {
       System.out.println(title); 
       this.setDefaultCloseOperation(EXIT_ON_CLOSE);
       this.setSize(480, 320);
       //panel.add(label);
       //button1.setPreferredSize(new Dimension(5, 10));
       
       
       
     
       panel.add(button0);
      
       panel.add(button1);
       
       panel.add(button2);
     
       panel.add(button3);
       
       panel.add(button4);
       
       panel.add(button5);
   
       panel.add(button6);
       
       panel.add(button7);
    
       panel.add(button8);
       
       panel.add(button9);
     
       panel.add(buttonadd);
      
       panel.add(buttonminus);
      
       panel.add(buttonmultiply);
 
       panel.add(buttondivide);
       
       panel.add(buttonresult);
       
       panel.add(buttonreset);
       
      this.add(panel);
      this.setVisible(true);

       buttons.add(button0);
       buttons.add(button1);
       buttons.add(button2);
       buttons.add(button3);
       buttons.add(button4);
       buttons.add(button5);
       buttons.add(button6);
       buttons.add(button7);
       buttons.add(button8);
       buttons.add(button9);
       buttons.add(buttonadd);
       buttons.add(buttonminus);
       buttons.add(buttonmultiply);
       buttons.add(buttondivide);

       //System.out.println(buttons);

    }
    
}