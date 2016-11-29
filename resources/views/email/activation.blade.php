<h1>Hello</h1>

<p>
	Please click the following link to activate yout account,

	<a href="{{ env('APP_URL') }}/activate/{{ $user->email}}/{{ $code }}">Activate Account</a>	
</p>