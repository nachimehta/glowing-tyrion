@extends('layout')

@section('content')
    <div class="page-header">
	<h1>Current Round Power Token Status</h1>
    </div>
    <p>{{ Auth::user()->username }} of House {{ Auth::user()->house }} with {{ Auth::user()->tokens }} tokens</p>
@if($bidStatus->isEmpty())
    <p> You need to bid on the {{ $track }} track! </p>
    <form action="{{ url('bid') }}" method="POST">
    <p><label for="tokens">Bid Tokens</label>
    <input type="number" name="tokens" min="0" max="{{Auth::user()->tokens}}"><input type="submit"></p></form>
@else
    <p> You have bid {{ $bidStatus->first()->tokens_bid }} tokens on the {{ $bidStatus->first()->bid_track }} track!</p>
    <p> This will leave you with {{ (int) Auth::user()->tokens - (int)$bidStatus->first()->tokens_bid }} tokens</p>
    <p> Do you wish to change your bid? <form action="{{ url('changeBid') }}" method="POST"><input type="submit"></form></p>
@endif

    <p>The following houses have placed bids: 
@foreach ($currentBids as $bid)
    <div> {{ $bid->user->house }} </div>
@endforeach


@if(!$previousBids->isEmpty())
    <p>These are the results from the previous bidding:</p>
    @foreach( $previousBids as $bid )
	{{ $bid->user->house }} bid {{ $bid->tokens_bid }} tokens, 
    @endforeach
@endif
@stop

