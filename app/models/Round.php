<?php

// app/models/Round.php

class Round extends Eloquent
{
    public $timestamps = false;

    public function house(){
    
	return $this->belongsTo('House');
    }

    public function tokens(){
	return $this->tokens;
    }
}
