<?php

interface GoodManners
{
    const END_WORDS = ", dirais-je.";
    public function say_please();
    public function say_thanks();
    public function say_sorry($name);
}

trait Singer
{
    function sing_a_song()
    {
        $txt = "Trololololololol";
        echo "$txt\n";
        $txt = str_replace('o', 'a', $txt);
        echo  $txt . "\n";
        $txt = str_replace('a', 'i', $txt);
        echo  $txt . "\n";
    }
}

abstract class Warrior
{
    use Singer;

    public function attack()
    {
        echo "I’ll kill you, poor noob !\n";
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
        echo "S'il-te-plait" . self::END_WORDS . "\n";
    }
    public function say_thanks()
    {
        echo "Merci" . self::END_WORDS . "\n";
    }
    public function say_sorry($name)
    {
        echo "Mille excuses, $name" . self::END_WORDS . "\n";
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
