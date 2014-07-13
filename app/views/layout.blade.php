<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game of Thrones Bidding App</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootswatch/3.2.0+1/darkly/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
	<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
		<a href="{{ action('ThroneController@index') }}" class="navbar-brand">Token Totals</a>
	    </div>
	    <div class="collapse navbar-collapse">
	    <ul class="nav navbar-nav">
		<li><a href="{{ action('ThroneController@bid') }}">
	    @if(Auth::check())
			Dashboard
	    @else
			Login
	    @endif
		    </a></li>
	    </ul>
	    </div>
	</nav>
	@yield('content')
    </div>
</body>
</html>
