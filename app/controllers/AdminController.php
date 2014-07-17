<?php

// app/controllers/AdminController.php

class AdminController extends BaseController
{

    public function admin()
    {
	$users = User::all();
	if(Auth::check() && Auth::id() == 1){
		$round = Cache::get('round');
		$track = Cache::get('track');
		return View::make('admin', array('users' => $users, 'round' => $round, 'track' => $track));
	}

	$users = User::whereRaw('house is not null')->get();
	$currentRound = Cache::get('round');
	return View::make('index', array('users' => $users, 'currentRound' => $currentRound));
    }

    public function updateUser()
    {
	$username = Input::get('user');
	$user = User::where('username', '=', "$username")->first();
	$user->house = Input::get('house');
	$user->tokens = Input::get('tokens');
	$user->save();

	return Redirect::to('admin');
    }

    public function updateMeta()
    {
	$round = Input::get('round');
	$track = Input::get('track');
	Cache::forever('track', $track);
	Cache::forever('round', $round);

	return Redirect::to('admin');
    }
}
