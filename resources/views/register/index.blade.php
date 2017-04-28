@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
		<div class="col-md-5 col-md-offset-3">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Create Account</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="POST">
                    <fieldset>
                    	<p>Name:</p>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Name" name="name" type="text">
			    		</div>
			    		<p>E-mail:</p>
			    		<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<p>Username:</p>
			    		<div class="form-group">
			    		    <input class="form-control" placeholder="Username" name="username" type="text">
			    		</div>
			    		<p>Password:</p>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<p>Re-enter Password:</p>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password_verify" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Register">
			    		<div class="text-center">
			    			<a href="/login">Already have an account? Login here!</a>
			    		</div>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>

@stop