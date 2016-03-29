@extends('app')

@section('content')

		<!-- Begin: Content -->
<section id="content">

	<div class="admin-form theme-info mw500" id="login">

		<!-- Login Logo -->
		<div class="row table-layout">
			<a href="dashboard.html" title="Return to Dashboard">
				<img src="{{ asset('assets/img/logos/logo.png') }}" title="AdminDesigns Logo" class="center-block img-responsive" style="max-width: 275px;">
			</a>
		</div>

		<!-- Login Panel/Form -->
		<div class="panel mt30 mb25">

			<form method="post" role="form" action="{{ url('/auth/login') }}">


				<input type="hidden" name="_token" value="{{ csrf_token() }}">



				<div class="panel-body bg-light p25 pb15">

					<!-- Social Login Buttons -->
					<div class="section row">
						<div class="col-md-6">
							<a href="#" class="button btn-social facebook span-left btn-block">
                      <span>
                        <i class="fa fa-facebook"></i>
                      </span>Facebook</a>
						</div>
						<div class="col-md-6">
							<a href="#" class="button btn-social googleplus span-left btn-block">
                      <span>
                        <i class="fa fa-google-plus"></i>
                      </span>Google+</a>
						</div>
						<div class="col-md-6 hidden">
							<a href="#" class="button btn-social twitter span-left btn-block">
                      <span>
                        <i class="fa fa-twitter"></i>
                      </span>Twitter</a>
						</div>
					</div>

					<!-- Divider -->
					<div class="section-divider mv30">
						<span>OU</span>
					</div>

					<!-- Username Input -->
					<div class="section">
						<label for="username" class="field-label text-muted fs18 mb10class" name="email" value="{{ old('email') }}">Email</label>
						<label for="username" class="field prepend-icon">
							<input type="text" name="username" id="username" class="gui-input" placeholder="Enter username">
							<label for="username" class="field-icon">
								<i class="fa fa-user"></i>
							</label>
						</label>
					</div>

					<!-- Password Input -->
					<div class="section">
						<label for="username" class="field-label text-muted fs18 mb10">Mot de passe</label>
						<label for="password" class="field prepend-icon">
							<input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
							<label for="password" class="field-icon">
								<i class="fa fa-lock"></i>
							</label>
						</label>
					</div>
				</div>

				<div class="panel-footer clearfix">
					<button type="submit" class="button btn-primary mr10 pull-right">Connexion</button>
					<label class="switch ib switch-primary mt10">
						<input type="checkbox" name="remember" id="remember" checked>
						<label for="remember" data-on="YES" data-off="NO"></label>
						<span>Se rappeler de moi</span>
					</label>
				</div>

			</form>
		</div>

		<!-- Registration Links -->
		<div class="login-links">
			<p>
				<a href="pages_forgotpw(alt).html" class="active" title="Sign In">Mot de passe oublié ?</a>
			</p>
			<p>Vous n'avez toujours pas de compte ?
				<a href="pages_register(alt).html" title="Sign In">Cliquez ici</a>
			</p>
		</div>

		<!-- Registration Links(alt) -->
		<div class="login-links hidden">
			<a href="pages_login-alt.html" class="active" title="Sign In">Sign In</a> |
			<a href="{{ url('/password/email') }}" class="" title="Register">Register</a>
		</div>

	</div>

</section>
<!-- End: Content -->



<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
