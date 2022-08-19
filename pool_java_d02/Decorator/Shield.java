public class Shield extends StuffDecorator{
    
     public  Shield (Warrior warrior) {
        System.out.println("May this shield protect me against every enemy .");
         warrior.setHp(warrior.getHp() + 10);
          
          
         
        }
}
