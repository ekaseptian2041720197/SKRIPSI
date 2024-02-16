<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('assets/img/login/icons/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/login/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/login/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/login/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/login/animate/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/login/css-hamburgers/hamburgers.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/login/animsition/css/animsition.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/login/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/login/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/login/util.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/login/main.css') }}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/img/login/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
   <!-- JavaScript Libraries -->
  <script src="{{ asset('assets/vendor/login/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/login/animsition/js/animsition.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/login/bootstrap/js/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/login/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/login/select2/select2.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/login/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/login/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets/vendor/login/countdowntime/countdowntime.js') }}"></script>
  <script src="{{ asset('assets/js/login/main.js') }}"></script>

</body>
</html>