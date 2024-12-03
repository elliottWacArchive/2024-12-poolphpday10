<?php

class Body
{
    private $head = 1;
    protected $arm = 2;
    public $hand = 2;
    protected $leg = 2;
    public $foot = 2;

    public function print_inside_attributes()
    {
        $arr = get_object_vars($this);
        foreach ($arr as $key => $val) {
            echo "$key : $val\n";
        }
    }
}

function print_object_attributes($object)
{
    $arr = get_object_vars($object);
    foreach ($arr as $key => $val) {
        echo "$key => $val\n";
    }
}
