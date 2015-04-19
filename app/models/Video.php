<?php

class Video extends Eloquent {

    protected $guarded = array('id');
    
    public function users()
    {
        return $this->belongsToMany('User');
    }

    public static $rules = array(
        'title' => array('required'),
        'image' => array('required'),
        'name'    => array('required'),
        'desc' => array('required', 'min:7')
    );
}