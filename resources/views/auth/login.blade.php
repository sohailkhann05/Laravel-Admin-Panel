<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Login</title>
		<link rel="shortcut icon" href="#" />
		<link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<!-- Button Css -->
		<link href="{{ asset('assets/css/loading.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/loading-btn.css') }}" rel="stylesheet">
	</head>
	<body style="background-color: #ECECEC;">
		<div class="page-content-wrapper" style="margin-top: 40px; background-color: #ECECEC;">
			<div class="page-content-wrapper-inner">
				<div class="content-viewport">
					<!-- Main Contents -->
					<div class="row justify-content-center">
						<div class="col-md-5 col-sm-5 col-5 equel-grid">
							<div class="grid">
								<p class="grid-header">Login</p>
								<div class="grid-body">
									<form method="POST" action="{{ route('login') }}">
				                        @csrf
				                        <div class="form-group">
				                            <label for="">Username</label>
				                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
				                            @error('username')
				                            <span class="invalid-feedback" role="alert">
				                                <strong>{{ $message }}</strong>
				                            </span>
				                            @enderror
				                        </div>
										<div class="form-group">
				                            <label for="">Password</label>
				                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
				                            @error('password')
				                            <span class="invalid-feedback" role="alert">
				                                <strong>{{ $message }}</strong>
				                            </span>
				                            @enderror
				                        </div>
										<div class="form-group">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
												<label class="form-check-label" for="remember">Remember Me</label>
				                            </div>
				                        </div>
				                        <div class="form-group">
				                        	<button type="submit" class="btn btn-primary">
				                        		Login
				                        	</button>
				                        </div>
				                    </form>
								</div>
							</div>
						</div>
					</div>
					<!-- End Main Contents -->
				</div>
			</div>
		</div>
		<!-- plugins:js -->
		<script src="{{ asset('assets/js/core.js') }}"></script>
		<script src="{{ asset('assets/js/template.js') }}"></script>
		<script src="{{ asset('assets/js/dashboard.js') }}"></script>
		<!-- CSS Loading Script -->
		<script>
		function loadingBtn() {
		document.getElementById('loading-btn').innerHTML = '<button type="button" class="btn btn-sm btn-disabled  ld-ext-right running" disabled>Please wait <div class="ld ld-ring ld-spin"></div></button>';
		return true;
		}
		</script>
	</body>
</html>