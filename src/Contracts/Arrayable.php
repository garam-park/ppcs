<?php

namespace StoryG\Ppcs\Contracts;

interface Arrayable
{
    /**
     * return instance as an array.
     * @return array
     */
    public function toArray() : array;
}
