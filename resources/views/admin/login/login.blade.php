@extends('admin.login.master')

@section('title')
Admin-Login
@endsection

@section('content')

<div id="parentHorizontalTab_agile">
	<div class="resp-tabs-container hor_1">
		<div class="w3_agile_login">


			<form class="agile_form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block" style="color:red" >
                                        <strong >{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="check">
					       <label class="form-control"><input type="checkbox" name="checkbox" required="required"><i> </i>I accept the terms and conditions</label>
				        </div>

                        <input id="login" type="submit" value="LogIn" class="agileinfo" />
                    </form>



			<!-- <form action="#" method="post" class="agile_form">
				<p>Email</p>
				<input type="email" name="username" required="required" />
				<p>Password</p>
				<input type="password" name="username" required="required" class="password" /> 
				<div class="check">
					<label class="checkbox w3l"><input type="checkbox" name="checkbox" required="required"><i> </i>I accept the terms and conditions</label>
				</div>
				<input type="submit" value="LogIn" class="agileinfo" />
			</form> -->
			<div class="login_w3ls">
				<a href="{{ route('password.request') }}">Forgot Password</a>
			</div>

		</div>
	</div>
</div>


@endsection