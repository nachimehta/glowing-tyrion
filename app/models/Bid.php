<?php

// app/models/Bid.php

class Bid extends Eloquent
{
    public $timestamps = false;

    public function user()
    {
	return $this->belongsTo('User');
    }
}
