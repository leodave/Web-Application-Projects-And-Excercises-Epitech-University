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
         JPanel panel2 = new JPanel();  
         JLabel label = new JLabel("0");
    
      public Window(String title, int height, int width) {
       System.out.println(title); 
       this.setDefaultCloseOperation(EXIT_ON_CLOSE);
       this.setSize(480, 320);

      
       panel2.add(label);
       panel.add(panel2);
       //button1.setPreferredSize(new Dimension(5, 10));
       
       
      button0.setLabel(label);
      button0.addActionListener(button0);
      panel.add(button0);
       button1.setLabel(label);
      button1.addActionListener(button1);
       panel.add(button1);
        button2.setLabel(label);
       button2.addActionListener(button2);
       panel.add(button2);
        button3.setLabel(label);
       button3.addActionListener(button3);
       panel.add(button3);
        button4.setLabel(label);
       button4.addActionListener(button4);
       panel.add(button4);
        button5.setLabel(label);
       button5.addActionListener(button5);
       panel.add(button5);
        button6.setLabel(label);
       button6.addActionListener(button6);
       panel.add(button6);
        button7.setLabel(label);
       button7.addActionListener(button7);
       panel.add(button7);
        button8.setLabel(label);
       button8.addActionListener(button8);
       panel.add(button8);
        button9.setLabel(label);
       button9.addActionListener(button9);
       panel.add(button9);
        buttonadd.setLabel(label);
       buttonadd.addActionListener(buttonadd);
       panel.add(buttonadd);
        buttonminus.setLabel(label);
       buttonminus.addActionListener(buttonminus);
       panel.add(buttonminus);
        buttonmultiply.setLabel(label);
       buttonmultiply.addActionListener(buttonmultiply);
       panel.add(buttonmultiply);
        buttondivide.setLabel(label);
       buttondivide.addActionListener(buttondivide);
       panel.add(buttondivide);
        buttonresult.setLabel(label);
       buttonresult.addActionListener(buttonresult);
       panel.add(buttonresult);
        buttonreset.setLabel(label);
       buttonreset.addActionListener(buttonreset);
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

