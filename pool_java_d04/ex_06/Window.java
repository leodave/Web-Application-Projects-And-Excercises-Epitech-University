import javax.swing.*;
import javax.swing.border.LineBorder;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Window extends JFrame  {

    CashRegister FrenchBaguette = new CashRegister("FrenchBaguette");
    CashRegister SoftBread = new CashRegister("SoftBread");
    CashRegister AppleSmoothy = new CashRegister("AppleSmoothy");
    CashRegister Coke = new CashRegister("Coke");
    CashRegister Hamsandwich = new CashRegister("Hamsandwich");
    CashRegister Panini = new CashRegister("Panini");
    CashRegister Cookie = new CashRegister("Cookie");
    CashRegister CheeseCake = new CashRegister("CheeseCake");
    CashRegister Breakfast = new CashRegister("Breakfast");
    CashRegister Lunch = new CashRegister("Lunch");
    CashRegister AfternoonTea = new CashRegister("AfternoonTea");
    CashRegister Ticket = new CashRegister("Ticket");

    
    JPanel panel = new JPanel(new GridLayout(6,3, 10, 10));
    public Window() {
        this.setDefaultCloseOperation(EXIT_ON_CLOSE);
        this.setSize(500, 300);

        Container mainContainer = this.getContentPane();
        mainContainer.setLayout(new BorderLayout(8,6));
        mainContainer.setBackground(Color.LIGHT_GRAY);
        this.getRootPane().setBorder(BorderFactory.createMatteBorder(4,4,4,4    ,Color.BLACK));

        JPanel topPanel = new JPanel();
        topPanel.setBorder(new LineBorder(Color.LIGHT_GRAY, 3));
        topPanel.setLayout((new FlowLayout(10)));
        topPanel.setBackground(Color.BLUE);
        mainContainer.add(topPanel, BorderLayout.NORTH);

        JLabel label = new JLabel("CEnter", SwingConstants.CENTER);
        label.setOpaque(true);
        label.setBorder(new LineBorder(Color.BLACK,3));




        Breakfast.setPreferredSize(new Dimension(150, 150));
        Breakfast.setLabel(label);
        Breakfast.addActionListener(Breakfast);
        label = Breakfast.getJLabel();
        Lunch.setPreferredSize(new Dimension(150, 150));
        Lunch.setLabel(label);
        Lunch.addActionListener(Lunch);
        label = Lunch.getJLabel();
        AfternoonTea.setPreferredSize(new Dimension(150, 150));
        AfternoonTea.setLabel(label);
        AfternoonTea.addActionListener(AfternoonTea);
        label = AfternoonTea.getJLabel();
        Ticket.setPreferredSize(new Dimension(300, 150));
        Ticket.setLabel(label);
        Ticket.addActionListener(Ticket);
        label = Ticket.getJLabel();

        topPanel.add(Breakfast);
        topPanel.add(Lunch);
        topPanel.add(AfternoonTea);
        topPanel.add(Ticket);

        JPanel middlePanel = new JPanel();
        middlePanel.setBorder(new LineBorder(Color.DARK_GRAY, 3));
        middlePanel.setLayout(new FlowLayout(4,4,4));
        middlePanel.setBackground(Color.BLUE);

        JPanel gridPanel = new JPanel();
        gridPanel.setLayout(new GridLayout(4,1,10,10));
        gridPanel.setBorder(new LineBorder(Color.LIGHT_GRAY));



        FrenchBaguette.setPreferredSize(new Dimension(300, 150));
        FrenchBaguette.setLabel(label);
        FrenchBaguette.addActionListener(FrenchBaguette);
        label = FrenchBaguette.getJLabel();
        gridPanel.add(FrenchBaguette);
        SoftBread.setPreferredSize(new Dimension(300, 70));
        SoftBread.setLabel(label);
        SoftBread.addActionListener(SoftBread);
        label = SoftBread.getJLabel();
        gridPanel.add(SoftBread);
        AppleSmoothy.setLabel(label);
        AppleSmoothy.addActionListener(AppleSmoothy);
        label = AppleSmoothy.getJLabel();
        gridPanel.add(AppleSmoothy);
        Coke.setLabel(label);
        Coke.addActionListener(Coke);
        label = Coke.getJLabel();
        gridPanel.add(Coke);
        Panini.setLabel(label);
        Panini.addActionListener(Panini);
        label = Panini.getJLabel();
        gridPanel.add(Panini);
        Cookie.setLabel(label);
        Cookie.addActionListener(Cookie);
        label = Cookie.getJLabel();
        gridPanel.add(Cookie);
        CheeseCake.setLabel(label);
        CheeseCake.addActionListener(CheeseCake);
        label = CheeseCake.getJLabel();
        gridPanel.add(CheeseCake);
        Hamsandwich.setLabel(label);
        Hamsandwich.addActionListener(Hamsandwich);
        label = Hamsandwich.getJLabel();
        gridPanel.add(Hamsandwich);

        middlePanel.add(gridPanel);
        mainContainer.add(label);
        mainContainer.add(middlePanel, BorderLayout.WEST);

        //this.add(panel);
        this.setVisible(true);
    }
}
 
