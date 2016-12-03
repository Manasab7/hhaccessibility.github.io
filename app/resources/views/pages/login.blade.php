@extends('layouts.default')
@section('content')

<div class="log-in">
	<div class="text-center header">
		<h1>Log In</h1>
		<p>New to Access Locator? <a href="/signup">Sign Up</a></p>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="login-form">
				<form method="post" action="/login">
                    {!! csrf_field() !!}
					<div class="row">
						<div class="col-xs-12">
							<input class="clean" name="email" placeholder="Email">
						</div>						
						<div class="col-xs-12">
							<input class="clean" name="password" type="password" placeholder="Password">
						</div>
						
                        <div class="col-xs-12">
							<div class="remember-password">
								<label>
									<input type="checkbox"> Remember Me
								</label>
								<a class="pull-right" href="/password-recovery"> Forgot Password? </a>
							</div>
                        </div>
                                                
					</div>
					<div>
						<input class="clean" type="submit" value="Log in">
					</div>
				</form>
			</div> 
		</div>
		<div class="col-md-6">
			<div class="social-media-logins">
				Or sign in using your social media account
				
				<a class="facebook" href="">
					<i class="fa-lg fa fa-facebook"></i>
					<div class="pull-right">Sign in with facebook</div>
				</a>
				<a class="google-plus" href="">
					<i class="fa-lg fa fa-google-plus"></i>
					<div class="pull-right">Sign in with Google</div>
				</a>
			</div>
		</div>
	</div>
</div>

@stop