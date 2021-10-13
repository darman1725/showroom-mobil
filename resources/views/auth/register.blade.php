<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Register | Beauty Care</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('css/grains/graindashboard.css') }}">
  </head>

  <body class="">
    <main class="main">
      <div class="content">
			<div class="container-fluid pb-5">
				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="brand text-center mb-3">
							<a href="/"><img src="{{ asset('img/logo.png') }}"></a>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Create new account</h4>
								<form method="POST" action="{{ route('register') }}">
                                    @csrf
									<div class="form-group">
										<label for="name">Name</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>

									<div class="form-group">
										<label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="password">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
										<div class="form-group col-md-6">
											<label for="password-confirm">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
										</div>
									</div>

									<div class="form-group no-margin">
										<button type="submit" class="btn btn-primary btn-block">
											Sign Up
										</button>
									</div>
									<div class="text-center mt-3 small">
										Already have an account? <a href="{{ route('login') }}">Sign In</a>
									</div>
								</form>
							</div>
						</div>
						<footer class="footer mt-3">
							<div class="container-fluid">
								<div class="footer-content text-center small">
									<span class="text-muted">&copy; 2019 Graindashboard. All Rights Reserved.</span>
								</div>
							</div>
						</footer>
					</div>
				</div>
			</div>
      </div>
    </main>

	<script src="{{ asset('js/grains/graindashboard.js') }}"></script>
    <script src="{{ asset('js/grains/graindashboard.vendor.js') }}"></script>
  </body>
</html>
