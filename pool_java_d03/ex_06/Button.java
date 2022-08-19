import javax.swing.JButton;
import javax.swing.JLabel;
import java.util.Arrays;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.lang.reflect.Array;

public class Button extends JButton implements ActionListener {
   
    JLabel label;
    static String text = "";
    String number = "";
    public static Double add;

    public void setLabel( JLabel lab){
        this.label = lab;
    }
    

    public JLabel getJLabel(){
        return label;
    }
   
    
    public Button(String button, int xpos, int ypos) {
        setText(button);
        number = button;
        setBounds(xpos,ypos,20,40);
        
    }
    @Override
    public void actionPerformed(ActionEvent e) {
        String[] test = {};
           System.out.println(getText() + " clicked"); 
           if(number.equals("Reset")){
                text = "0";
                label.setText("0");
                return;
           } if (getText() == "Result"){
                    //text = this.add.toString();
                    System.out.println(add);
                    label.setText(this.add.toString()); 
                    return;
                
           }
           else{
                text = text + number;
                label.setText(text);
                Calculator calculator = new Calculator();
               if (text.contains("+")){
                    test = text.split("\\+");
                    this.add =calculator.add(Double.parseDouble(test[0]), Double.parseDouble(test[1]));
                    System.out.println(add);
                    }
                if(text.contains("-")){
                     test = text.split("\\-");
                    this.add =calculator.substract(Double.parseDouble(test[0]), Double.parseDouble(test[1]));
                    System.out.println(add);
                }if(text.contains("*")){
                     test = text.split("\\*");
                    this.add = calculator.multiply(Double.parseDouble(test[0]), Double.parseDouble(test[1]));
                    System.out.println(add);
                }if(text.contains("/")){
                     test = text.split("\\/");
                    this.add = calculator.divide(Double.parseDouble(test[0]), Double.parseDouble(test[1]));
                    System.out.println(add);
                }
            }
   
    }
}
