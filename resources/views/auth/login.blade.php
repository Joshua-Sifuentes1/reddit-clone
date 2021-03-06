@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please sign in</h3>
				</div>
				<div class="panel-body">
					<form accept-charset="UTF-8" role="form" method="POST" action="/auth/login">
					{!! csrf_field() !!}
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="E-mail" name="email" type="text" value="{{ old('email') }}">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" value="">
						</div>
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Remember Me"> Remember Me
							</label>
						</div>
						<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
						<div class="text-center">
							<a href="/register">New user? Register here!</a>
						</div>
					</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop