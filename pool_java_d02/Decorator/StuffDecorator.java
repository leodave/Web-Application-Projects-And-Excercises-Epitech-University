public class StuffDecorator extends Warrior {
    protected Warrior holder;
    @Override
    public int getHp() {
        return hp;
    }
    @Override
     public int getDmg() {
        return dmg;
    }
}
