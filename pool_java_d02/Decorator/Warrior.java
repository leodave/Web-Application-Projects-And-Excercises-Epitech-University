public  abstract class Warrior {
    protected int hp;
    protected int dmg;

    public int getHp() {
        return hp;
    }
     public int getDmg() {
        return dmg;
    }
    public void setHp(int newHp) {
        this.hp = newHp;
        
    }
    public void setDmg(int newDmg) {
        this.dmg = newDmg;
    }
}
