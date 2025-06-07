<!doctype html>
<html lang="en">
  <head>
  	<title>TUNCER DASHBOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	</head>
<body class="img js-fullheight" style="background-image: url({{ asset('img/bg.jpg') }});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">TUNCER DASHBOARD</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
                            @if(session('success'))
                            <div class="alert alert-success text-center">{{ session('success') }}</div>
                            @elseif(session('error'))
                                <div class="alert alert-danger text-center">{{ session('error') }}</div>
                            @endif

                        <form action="{{ route('admin.register.submit') }}" class="signin-form" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>

                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                            </div>

                            <div class="form-group mb-3">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group text-center mt-4">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
                            </div>

                            <p class="w-100 text-center mt-4 mb-0">Already have an account?</p>
                            <p class="w-100 text-center mt-1"><a href="{{ route('admin.login') }}" style="color: #f5af19; font-weight: bold;">Sign In</a></p>
                        </form>
		         </div>
				</div>
			</div>
		</div>
	</section>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>
</html>

