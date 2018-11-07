<?php
use PHPUnit\Framework\TestCase;

use StoryG\Ppcs\Examples\Cat;

class CatTest extends TestCase
{
    /**
     * @expectedException LogicException
     */
    public function testAssignName()
    {
        $navi = new Cat('navi',1);
        $navi->name = "hello world";
    }

    /**
     * @expectedException LogicException
     */
    public function testAssignAge()
    {
        $navi = new Cat('navi',1);
        $navi->age = 100;
    }

    /**
     * @expectedException Exception
     */
    public function testChangeNameWithEmpty()
    {
        $navi = new Cat('navi',1);
        $navi->changeName("");
    }

    public function testChangeName()
    {
        $navi = new Cat('navi',1);
        $navi->changeName("kong");
        $this->assertEquals('kong',$navi->name);
    }

    /**
     * @expectedException Exception
     */
    public function testChangeAgeWithNegative()
    {
        $navi = new Cat('navi',1);
        $navi->changeAge(-10);
    }

    public function testChangeAge()
    {
        $navi = new Cat('navi',1);
        $navi->changeAge(2);

        $this->assertEquals(2,$navi->age);
    }
}