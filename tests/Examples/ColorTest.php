<?php
use PHPUnit\Framework\TestCase;

use StoryG\Ppcs\Examples\Color;

class ColorTest extends TestCase
{

    public function testReadValues()
    {
        $color = new Color(255,100,10);
        $this->assertEquals(255,$color->red);
        $this->assertEquals(100,$color->green);
        $this->assertEquals(10,$color->blue);
    }

    /**
     * @expectedException LogicException
     */
    public function testAssignRed()
    {
        $red = new Color(255,0,0);
        $red->red = 100;
    }

    /**
     * @expectedException LogicException
     */
    public function testUseUndeclaredVariable()
    {
        $red = new Color(255,0,0);
        $red->a = 100;
    }
    
}