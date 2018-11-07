<?php

namespace StoryG\Ppcs\Examples;

use StoryG\Ppcs\Traits\ValueObj as VO;

class Color
{
    use VO;
    /**
     * @var int
     */
    protected $red;
    /**
     * @var int
     */
    protected $green;
    /**
     * @var int
     */
    protected $blue;

    public function __construct(int $red,int $green,int $blue) {
        $this->red   = $red;
        $this->green = $green;
        $this->blue  = $blue;
    }
}
