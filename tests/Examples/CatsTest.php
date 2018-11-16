<?php
use PHPUnit\Framework\TestCase;

use StoryG\Ppcs\Examples\Cats;
use StoryG\Ppcs\Examples\Cat;

class CatsTest extends TestCase
{

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInitWithNotCats()
    {
        $navis = new Cats([1,2,3]);
    }

    public function testInitWithCats()
    {
        $kong  = new Cat('콩이',1);
        $dkong = new Cat('콩이',1);
        $navi  = new Cat('나비',1.5);
        
        $cats = new Cats([
            $kong,
            $dkong,
            $navi,
        ]);
        
        $this->assertTrue($cats[0] === $kong);
        $this->assertTrue($cats[1] === $dkong);
        $this->assertTrue($cats[2] === $navi);

        return $cats;
             
    }

    /**
     * @depends testInitWithCats
     * @expectedException InvalidArgumentException
     */
    public function testAppendWithNotCat(Cats $cats)
    {
        $cats->append(123);
    }

    /**
     * @depends testInitWithCats
     * @expectedException InvalidArgumentException
     */
    public function testOffsetSetWithNotCat(Cats $cats)
    {
        $cats[0] = 123;
    }

    /**
     * @depends testInitWithCats
     */
    public function testAppendWithCat(Cats $cats)
    {
        $cats->append($luv = new Cat('사랑이',1));
        $foo = $cats[-1];
        $this->assertEquals($luv,$foo);
    }

    /**
     * @depends testInitWithCats
     */
    public function testOffsetSetWithCat(Cats $cats)
    {
        
        $cats[0] = $lamhyeon = new Cat('람현이',0.4); 
        $this->assertEquals($lamhyeon,$cats[0]);
    }

    public function testOffsetGet()
    {
        $kong  = new Cat('콩이',1);
        $dkong = new Cat('콩이',1);
        $navi  = new Cat('나비',1.5);
        $rh  = new Cat('람현이',1.5);
        
        $cats = new Cats([
            $kong,
            $dkong,
            $navi,
            $rh
        ]);
        
        $this->assertTrue($cats[0] === $kong);
        $this->assertTrue($cats[1] === $dkong);
        $this->assertTrue($cats[2] === $navi);
        $this->assertTrue($cats[3] === $rh);

        $this->assertTrue($cats[-1] === $rh);
        $this->assertTrue($cats[-2] === $navi);
        $this->assertTrue($cats[-3] === $dkong);
        $this->assertTrue($cats[-4] === $kong);

        $this->assertTrue($cats[-5] === $rh);
        $this->assertTrue($cats[-6] === $navi);
        $this->assertTrue($cats[-7] === $dkong);
        $this->assertTrue($cats[-8] === $kong);

        $this->assertTrue($cats[-9] === $rh);
        $this->assertTrue($cats[-10] === $navi);
        $this->assertTrue($cats[-11] === $dkong);
        $this->assertTrue($cats[-12] === $kong);

        $this->assertTrue($cats[-13] === $rh);
        $this->assertTrue($cats[-14] === $navi);
        $this->assertTrue($cats[-15] === $dkong);
        $this->assertTrue($cats[-16] === $kong);

        return $cats;
    }

}