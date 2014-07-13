@extends('layout')

@section('content')
	<form action="{{ url('user') }}" method="POST">
	    <p><label for="username">Username:</label></p>
	    <p><input type="text" name="username" placeholder="Username" /></p>
	    <p><label for="password">Password:</label></p>
	    <p><input type="password" name="password" placeholder="Password" /></p>
	    <p><input type="submit" value="Create" /></p>
	</form>
@stop
