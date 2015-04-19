<?php

class Mcirlog extends \Eloquent {

    protected $guarded = array('id');
    public static $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'vaccine' => 'required',
            'phone' => 'required',
            'site' => 'required',
            'mfg_id' => 'required',
            'date' => 'required',
            'init'  => 'required',
            'exp_date'  => 'required',
            'put_in_mcir'  => 'required',
        );
    public function location()
    {
        return $this->belongsTo('Location');
    }

}