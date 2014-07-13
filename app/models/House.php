<?php

// app/models/House.php

class House extends Eloquent
{
    public $timestamps = false;

    public function user()
    {
	return $this->belongsTo('User');
    }

    public function round()
    {
	return $this->hasOne('Round');
    }
}
