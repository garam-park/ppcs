<?php

namespace StoryG\Ppcs\Examples;

use StoryG\Ppcs\Traits\TrustableObj as TO;

class Cat
{
    use TO;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var float
     */
    protected $age;

    public function __construct(string $name,float $age) {
        $this->name = $name;
        $this->age  = $age;
    }

    public function changeName(string $name)
    {
        if(strlen($name) <= 0)
            throw new \Exception("Name of Cat cannot empty name", 1);
            
        $this->name = $name;
    }

    public function changeAge(float $age)
    {
        if($age < 0)
            throw new \Exception("Age of Cat cannot empty negative", 1);
            
        $this->age = $age;
    }
}
