import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class CashRegister extends JButton implements  ActionListener {
    JLabel label;
    String title;
    String center = "";
    static double price;
    static String text = "";

    FrenchBagguette frenchbagguete = new FrenchBagguette();
    SoftBread softbread = new SoftBread();
    AppleSmoothy applesmoothy = new AppleSmoothy();
    CheeseCake cheesecake = new CheeseCake();
    Coke coke = new Coke();
    Cookie cookie= new Cookie();
    Hamsandwich hamsandwich = new Hamsandwich();
    Panini panini = new Panini();



    public JLabel getJLabel(){
        return label;
    }
    public void setLabel( JLabel lab){
        this.label = lab;
    }
    public CashRegister(String title){
        this.title = title;
        if (title.contains("FrenchBaguette")) {
            setText(title + " Price: " + frenchbagguete.getPrice() + " Calories: " + frenchbagguete.getCalories() + " baking-time: " + frenchbagguete.getBakingTime());
        }else if (title.contains("SoftBread")) {
            setText(title + " Price: " + softbread.getPrice() + " Calories: " + softbread.getCalories() + " baking-time: " + softbread.getBakingTime());
        }else if (title.contains("AppleSmoothy")) {
            setText(title + " Price: " + applesmoothy.getPrice() + " Calories: " + applesmoothy.getCalories() + " with can: " + applesmoothy.can);
        }else if (title.contains("CheeseCake")) {
            setText(title + " Price: " + cheesecake.getPrice() + " Calories: " + cheesecake.getCalories());
        }else if (title.contains("Coke")) {
            setText(title + " Price: " + coke.getPrice() + " Calories: " + coke.getCalories() + " with can: " + coke.can);
        }else if (title.contains("Cookie")) {
            setText(title + " Price: " + cookie.getPrice() + " Calories: " + cookie.getCalories());
        }else if (title.contains("Hamsandwich")) {

            for( int f = 0; f < hamsandwich.ingredients.length; f++) {
                setText(title + " Price: " + hamsandwich.getPrice() + " Calories: " + hamsandwich.getCalories()+ " ingredients: " + hamsandwich.ingredients[f]);
            }
        }else if (title.contains("Panini")) {
            for (String ingredient : panini.ingredients){
            setText(title + " Price: " + panini.getPrice() + " Calories: " + panini.getCalories()+ " ingredients: " + ingredient);
            }
        }
        else{
            setText(title);
        }
        center = title;
    }
    @Override
    public void actionPerformed(ActionEvent e) {
            //System.out.println(getText());

            text = text + " + " + center;
           // label.setText(text);
            //System.out.println(getJLabel());

            if(center == "FrenchBaguette"){
                price = frenchbagguete.getPrice();
                label.setText(price.toString);
            } if(center == "SoftBread"){
            price = price + softbread.getPrice();
            label.setText(price);
            } if(center == "AppleSmoothy"){
            price = price + applesmoothy.getPrice();
            label.setText(text);
            } if(center == "CheeseCake"){
            price = price + cheesecake.getPrice();
            label.setText(text);
            } if(center == "Coke"){
            price = price + coke.getPrice();
            label.setText(text);
            } if(center == "Cookie"){
            price = price + cookie.getPrice();
            label.setText(text);
            } if(center == "Hamsandwich"){
            price =  price + hamsandwich.getPrice();
            label.setText(text);
            } if(center == "Panini"){
            price = price + panini.getPrice();
            label.setText(text);
            }if(center == "Ticket"){
            label.setText(text);
        }

    }
}
