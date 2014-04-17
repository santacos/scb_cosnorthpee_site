@extends('user.layouts.default')

@section('title')
SCB Recruiter-Home
@stop

@section('body-class')
"fixed-header"
@stop

@section('header-class')
"header header-two"
@stop



@section('content')
	<section id="main">
	  <header class="page-header">
	    <div class="container">
	      <h1 class="title">Login or Create an Account</h1>
	    </div>	
	  </header>
	  <div class="container">
	    <div class="row">
	      <div class="content login col-sm-12 col-md-12">
		<div class="row">
		  <div class="col-sm-6 col-md-6">
		    <div class="new-costumers">
		      <h3 class="title">Sign Up</h3>
		      <p>creating an account with SCB Recruitment system</p>

		      <a href="{{URL::to('user/create')}}"> 
		      <button class="btn btn-default">Create an Account</button>
		  	  </a>

		    </div>
		  </div>
		  <div class="col-sm-6 col-md-6">
		  	<form class="register-form" method="POST" action="{{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}}" accept-charset="UTF-8">
		    <!--<form class="register-form">-->
		      <h3 class="title">Sign in</h3>

		      <!-- error massage-->
		      	@if ( Session::get('error') )
				<div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
				@endif

				@if ( Session::get('notice') )
				<div class="alert alert-success">{{{ Session::get('notice') }}}</div>
				@endif
			  <!-- end error massage-->

		      <p>If you have an account with us, please log in.</p>
		      <!--<label>Username: <span class="required">*</span></label>
		      <input class="form-control" type="email">
		      <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
		      -->

		      <!--from boss-->
		      		<div class="form-group">
					<label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}<span class="required">*</span></label>
					<input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
					</div>

					<div class="form-group">
					<label for="password">
						{{{ Lang::get('confide::confide.password') }}}
						<span class="required">*</span>
						<small>
							<a href="{{{ (Confide::checkAction('UserController@forgot_password')) ?: 'forgot' }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
						</small>
					</label>
					<input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
					</div>
		      <!--end boss -->

		      <!--
		      <label>Password: <span class="required">*</span></label>
		      <input class="form-control" type="password">
		      -->

		      <div class="checkbox"><label class="">
				<input type="checkbox"> Remember password
		      </label></div>
		      
		      <div class="buttons-box clearfix">
				<button tabindex="3" type="submit" class="btn pull-left btn-default">{{{ Lang::get('confide::confide.login.submit') }}}</button>
				<a href="#" class="forgot">Forgot Your Password?</a>
				<span class="required"><b>*</b> Required Field</span>
		      </div><!-- .buttons-box -->
		    </form>
		  </div>
		</div>
	      </div>
	    </div>
	  </div><!-- .container -->
	</section><!-- #main -->
@stop