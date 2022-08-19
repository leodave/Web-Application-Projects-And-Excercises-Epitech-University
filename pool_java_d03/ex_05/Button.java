import javax.swing.JButton;
import javax.swing.JLabel;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Button extends JButton implements ActionListener {
   
    JLabel label;
    public void setLabel( JLabel lab){
        this.label = lab;
    }
    
    public Button(String button, int xpos, int ypos) {
        setText(button);
        setBounds(xpos,ypos,20,40);
        
    }
    @Override
    public void actionPerformed(ActionEvent e) {
           System.out.println(getText() + " clicked"); 
           if((getText() == "Result" ) || (getText() == "Reset" )){
            label.setText("0");
           }else{
           label.setText(getText());
           }
    }
}
