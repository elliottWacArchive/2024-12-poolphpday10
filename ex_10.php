<?php

class Pangolin
{
    public array|null $friends;
    public Skill $skills;

    public function __construct(array|null $friends, Skill $skills)
    {
        $this->friends = $friends;
        $this->skills = $skills;
        echo "zizi";
    }
}
