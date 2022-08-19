import javax.swing.JButton;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Button extends JButton implements ActionListener {
   
    
    public Button(String button, int xpos, int ypos) {
        setText(button);
        setBounds(xpos,ypos,20,40);
        
    }
    @Override
    public void actionPerformed(ActionEvent e) {
           System.out.println(getText() + " clicked");  ;
    }
}
