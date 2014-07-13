@extends('layout')

@section('content')
    <div class="page-header">
	<h1>Current Round Power Token Status</h1>
    </div>

    @if (!$currentRound)
	<p>The game has not begun!</p>
    @else
	<table class="table table-striped">
	    <thead>
		<tr>
		    <th>Round Number</th>
		    @foreach ($users as $user)
		    <th>{{ $user->house }}</th>	
		    @endforeach
		</tr>
	    </thead>
	    <tbody>
		<tr>
		    <td>{{ $currentRound }}</td>
		    @foreach ($users as $user)
		    <td>{{ $user->tokens }}</td>
		    @endforeach
		<tr>
	    </tbody>
	</table>
    @endif
@stop
