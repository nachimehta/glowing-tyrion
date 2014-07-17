@extends('layout')

@section('content')
<script>
    var track = "{{ $track }}";
</script>
    {{ HTML::script('js/admin.js') }}
    <div class="row">
	<div class="col-md-8">
    	    <div class="panel panel-default">
		<div class="panel-heading">Update user houses and tokens</div>
		<div class="panel-body">
	    	    <table class="table">
			<tr><th>username</th><th>House</th><th>Tokens</th><th></th></tr>
    			@foreach($users as $user)
    	 	    	    <tr><form action="{{ url('updateUser') }}" method="POST"><input type="hidden" name="user" value="{{ $user->username }}">
			    <td> {{ $user->username }} </td>
			    <td><input type="text" name="house" value="{{ $user->house }}"></td>
			    <td><input type="number" name="tokens" min="0" max="20" value="{{ $user->tokens }}"></td>
			    <td><button class="btn btn-default btn-sm" type="submit">Update</button></form></td>
    			@endforeach
	    	    </table>
		</div>
    	    </div> {{-- end panel panel-default div --}}
	</div>
	<div class="col-md-4">
	    <div class="panel panel-default">
	        <div class="panel-heading">Update round and track info</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" action="{{ url('updateMeta') }}" method="POST">
			    <div class="form-group"><label class="col-sm-2 control-label">Track</label>
			        <div class="col-sm-5">
				    <select id="trackSelect" name="track" class="form-control">
				    <option value="Iron Throne">Iron Throne</option>
				    <option value="Fiefdom">Fiefdom</option>
				    <option value="King's Court">King's Court</option>
				    <option value="Wildings">Wildings</option>
				    </select>
			        </div>
			    </div>
			    <div class="form-group"><label class="col-sm-2 control-label">Round</label>
			        <div class="col-sm-5"><input name="round" class="form-control" type="number" min="0" max="10" value="{{ $round }}"/></div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-7">
			            <button class="btn btn-default">Update</button>
			  	</div>
			    </div>
			</form>
		</div>
	    </div>
	</div>
	</div>
@stop

