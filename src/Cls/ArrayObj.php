<?php

namespace StoryG\Ppcs\Cls;

use StoryG\Ppcs\Traits\ValueObj;

class ArrayObj extends \ArrayObject
{
    protected $T;

    use ValueObj;

    public function __construct(array $ts = []) {
        
        foreach ($ts as $key => $t) {
            $is_t = $t instanceof $this->T;
            
            if(!$is_t)
                throw new \InvalidArgumentException("only $this->T can be append.");
        }

        parent::__construct($ts,\ArrayObject::ARRAY_AS_PROPS); 
    }

    public function exchangeArray($ts) {
        
        foreach ($ts as $key => $t) {
            $is_t = $t instanceof $this->T;
            
            if(!$is_t)
                throw new \InvalidArgumentException("only $this->T's array can be exchangable.");
        }
        
        return parent::exchangeArray($ts); 
    }


    /**
     * @param string $t
     * @return void
     */
    public function append($t)
    {
        $is_t = $t instanceof $this->T;
        
        if(!$is_t)
            throw new \InvalidArgumentException("only $this->T can be append.");
        
        parent::append($t);
    }

    public function offsetSet($index, $t){
        $is_t = $t instanceof $this->T;
        
        if(!$is_t)
            throw new \InvalidArgumentException("only $this->T can be offsetSet.");
        
        parent::offsetSet($index,$t);
    }

    public function offsetGet($index){

        if($index < 0){
            $size = count($this);
            $index = $index%($size);
            if($index < 0)
                $index = $size + $index ;
        }
        return parent::offsetGet($index);
    }
    
}
