<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

        <title>myge</title>

        <link rel = "icon" href = "{{asset('/porto/img/myLogo.png')}}" type = "image/x-icon">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/animate/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/font-awesome/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('porto/css/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('porto/css/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('porto/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('porto/vendor/modernizr/modernizr.js') }}"></script>

        <style>
            body{
                background-color:white;
            }
        </style>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="{{ asset('porto/img/myLogo2.png') }}" height="75" alt="Myge Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right" >
						<h2 class="title text-uppercase font-weight-bold m-0" style="background-color:black"><i class="fas fa-user mr-1"></i> Log In</h2>
					</div>
					<div class="card-body" style="background-color: #F5F5F5; border-top-color: black;">
                        @if(session()->has('Message'))
                            <div class="row mb-3">
                                <div class="alert alert-danger" role="alert">
                                    {{ session()->get('Message') }}
                                </div>
                            </div>
                        @endif
                        <form action="/admin/login" method="POST">
                            @csrf
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group">
									<input name="Username" type="text" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
								</div>
								<div class="input-group">
									<input name="Password" type="password" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12 text-right">
									<button type="submit" class="btn btn-dark mt-2">Sign In</button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{ asset('porto/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('porto/vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('porto/vendor/common/common.js') }}"></script>
		<script src="{{ asset('porto/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('porto/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('porto/js/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('porto/js/custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('porto/js/theme.init.js') }}"></script>

	</body>
</html>