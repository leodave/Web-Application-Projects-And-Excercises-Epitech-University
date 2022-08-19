import javax.swing.JButton;



public class Button extends JButton  {
   
    
    public Button(String button, int xpos, int ypos) {
        setText(button);
        setBounds(xpos,ypos,20,40);
        
    }
   
}

