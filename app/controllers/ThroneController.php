<?php

// app/controllers/ThroneController.php

class ThroneController extends BaseController
{

    public function index()
    {
	//show current power token totals
	$currentRound = Cache::get('round');
	$users = User::whereRaw('house is not null')->get();
	return View::make('index', array('users' => $users, 'currentRound' => $currentRound));
    }

    public function user()
    {
	return View::make('create_user_form');
    }

    public function addUser()
    {
	$user = new User;
        $user->username = Input::get('username');
	$user->password = Hash::make(Input::get('password'));
 	$user->save();
	
	return Redirect::to('bid');
    }

    public function bid()
    {
	//hardcode bidTrack status
	$track = Cache::get('track');
	//show the bid statuses
	if(Auth::check()){
	    $authId = Auth::id();
	    $currentRound = Cache::get('round');
	    $previousRound = $currentRound - 1;
	    $bidStatus = Bid::whereRaw("user_id = $authId and round_id = '$currentRound'")->get();
	    $currentBids = Bid::where('round_id', '=', "$currentRound")->get();
	    $previousBids = Bid::where('round_id', '=', "$previousRound")->get();
	    
	    $previousBids = $previousBids->sortBy(function($bids)
	    {
		return $bids->tokens_bid;
	    })->reverse();

	    return View::make('bid', array('track' => $track, 'bidStatus' => $bidStatus, 'currentRound' => $currentRound, 'currentBids' => $currentBids, 'previousBids' => $previousBids));
	} else $this->user();
    }

    public function editBid()
    {
	$currentRound = Cache::get('round');
	$bid = new Bid;
	$bid->user_id = Auth::id();
	$bid->round_id = $currentRound; 
	$bid->tokens_bid = Input::get('tokens');
	$bid->bid_track = Cache::get('track');
	$bid->save();

        $allBids = Bid::where('round_id', '=', "$currentRound")->get();
	if($allBids->count() == 6){
	   $this->EndBidding($allBids, $currentRound);
	}
	return Redirect::to('bid');
    }

    public function changeBid()
    {
	$authId = Auth::id();
	$currentRound = Cache::get('round');
	$bidStatus = Bid::whereRaw("user_id = $authId and round_id = $currentRound")->delete();	
	return Redirect::to('bid');
    }

    private function getCurrentRound(){
	return Round::orderBy('number', 'DESC')->first()->number;
    }

    private function EndBidding($allBids, $currentRound){
	Cache::forget('round');
	Cache::forever('round', ++$currentRound);
	$round = new Round;
	$round->number = $currentRound;
	$round->save();
	$track = Cache::get('track');

	switch(Cache::get('track')){
	default:
	case "King's Court":
	     Cache::forever('track', 'Iron Throne');
	     break;
	case 'Iron Throne':
	     Cache::forever('track', 'Fiefdom');
	     break;
	case 'Fiefdom':
	     Cache::forever('track', "King's Court");
	     break;
	}
	
	$this->UpdateUserTokens($allBids);
    }

    private function UpdateUserTokens($allBids){
	$allBids->each(function($bid)
	{
	    $user = User::find($bid->user_id);
	    $user->tokens -= $bid->tokens_bid;
	    $user->save();   
        });
    }
}
