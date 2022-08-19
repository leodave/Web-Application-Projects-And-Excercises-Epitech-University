public class FireSword extends StuffDecorator{
    
    public FireSword(Warrior warrior) {
        System.out.println("I can slice and burn like the wind and the flames .");
        //System.out.println(warrior.getDmg() + 3);
         warrior.setDmg(warrior.getDmg() + 3);
    }
    

}
