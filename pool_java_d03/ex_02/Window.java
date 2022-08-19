import javax.swing.JFrame;

public class Window extends JFrame{
    public Window(String title, int height, int width) {
       System.out.println(title); 
       this.setSize(480, 320);
       this.setVisible(true);
    }
    
}
