<?php

interface GoodManners
{
    const END_WORDS = ", dirais-je.";
    public function say_please();
    public function say_thanks();
    public function say_sorry($name);
}

abstract class Warrior
{
    public function attack()
    {
        echo "I’ll kill you, poor noob !";
    }
    abstract public function represent();
    abstract public function shout();
}

class Booba extends Warrior implements GoodManners
{
    public function represent()
    {
        echo "92\n";
    }
    public function shout()
    {
        echo "Bah bien Morray !";
    }
    public function say_please()
    {
        echo "S'il-te-plait" . static::END_WORDS . "\n";
    }
    public function say_thanks()
    {
        echo "Merci" . static::END_WORDS . "\n";
    }
    public function say_sorry($name)
    {
        echo "Mille excuses, $name" . static::END_WORDS . "\n";
    }
}

class LaFouine extends Warrior
{
    public function represent()
    {
        echo "78\n";
    }
    public function shout()
    {
        echo "Je suis proprietaire !";
    }
}
