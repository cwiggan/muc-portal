<?php

class Location extends Eloquent {

    protected $guarded = array('id');
    
    public function mlogs()
    {
        return $this->hasMany('Mcirlog');
    }

}