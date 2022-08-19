<?php
interface IUnit{
    public function equip($equip);
    public function attack($attack);
    public function receiveDamage($damage);
    public function moveCloseTo($close);
    public function recoverAP();
}