<?php

class Dolly
{
    public $animal;
    public $age;
    public $doctor;
    public function __construct($animal, $age, $doctor)
    {
        $this->animal = $animal;
        $this->age = $age;
        $this->doctor = $doctor;
    }
}