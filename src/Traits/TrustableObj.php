<?php

namespace StoryG\Ppcs\Traits;

trait TrustableObj
{
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            $prop =  $this->{$key};
            $type = gettype($prop);
            if($type == "array" ||$type ==  "object"){
                return clone $prop;
            }
            return $prop;
        } else {
            return null; // or throw an exception
        }
    }
    
    public function __set($key, $value)
    {
        if (property_exists($this, $key)) {
            throw new \LogicException("$key can be changed from outside.",406);
        } else {
            throw new \LogicException("$key is not supported.",406);
        }
    }  
}
