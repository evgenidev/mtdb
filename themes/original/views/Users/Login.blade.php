@extends('Main.Boilerplate')

@section('htmltag')
  <html id="login-page">
@stop

@section('title')
  <title>{{ trans('users.login title') }}</title>
@stop

  @section('content')
    <div class="container">
      <div class="col-md-4"></div>

      <div class="col-md-4" id="login-box">

      	<div class="row"> @include('Partials.Response') </div>

        <div class="">
        	{{ Form::open(array('action' => 'SessionController@store')) }}

	          <div class="form-group">
	            <label for="username"><i class="fa fa-user"></i> {{ trans('users.username') }}</label>
	            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
	            {{ $errors->first('username', "<span class='help-block alert alert-danger'>:message</span>") }}
	          </div>

	          <div class="form-group">
	            <label for="password"><i class="fa fa-lock"></i> {{ trans('users.password') }}</label>
	            {{ Form::password('password', array('class' => 'form-control')) }}
	            {{ $errors->first('password', "<span class='help-block alert alert-danger'>:message</span>") }}
	          </div>
	          
	          <hr>

	          <div class="login-remember-row">
	            <label for="remember">{{ trans('users.remember me') }}</label>
	            {{ Form::checkbox('remember', 1, true, array('id' => 'remember')) }}

	            <a href="{{ url('forgot-password') }}">{{ trans('users.forgot your password') }}</a>
	            <button type="submit" class="btn btn-primary pull-right">{{ trans('users.login') }}</button>
	          </div>

	        {{ Form::close() }}
        </div>
    </div>

    <div class="col-md-2"></div>

  </div>
  @stop

  @section('ads')
  @stop