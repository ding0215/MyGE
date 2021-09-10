<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>myge</title>
		<!-- Title icon -->
		<link rel = "icon" href = "{{asset('/porto/img/myLogo.png')}}" type = "image/x-icon">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('porto/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{asset('porto/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<link rel="stylesheet" href="{{ asset('porto/vendor/jquery-ui/jquery-ui.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/jquery-ui/jquery-ui.theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/select2/css/select2.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/dropzone/basic.cs') }}s" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/dropzone/dropzone.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/summernote/summernote-bs4.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/codemirror/lib/codemirror.css') }}" />
		<link rel="stylesheet" href="{{ asset('porto/vendor/codemirror/theme/monokai.css') }}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('porto/vendor/owl.carousel/assets/owl.carousel.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/owl.carousel/assets/owl.theme.default.css')}}" />
		
		@yield('css')

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('porto/css/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('porto/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('porto/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('porto/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../2.2.0" class="logo" style="margin:3px 0 0 20px">
						<img src="{{asset('/porto/img/myLogo2.png')}}" width="120" height="50" alt="MyGE" />
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Admin</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="admin/logout"><i class="fas fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li class="nav-active">
				                        <a class="nav-link" href="layouts-default.html">
				                            <i class="fa fa-home" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
									<li class="nav">
				                        <a class="nav-link" href="/election">
				                            <i class="fas fa-handshake" aria-hidden="true"></i>
				                            <span>Election</span>
				                        </a>                        
				                    </li>
									<li class="nav">
				                        <a class="nav-link" href="/candidates">
				                            <i class="fas fa-users" aria-hidden="true"></i>
				                            <span>Candidate</span>
				                        </a>                        
				                    </li>
									<li class="nav">
				                        <a class="nav-link" href="/party">
				                            <i class="fas fa-balance-scale" aria-hidden="true"></i>
				                            <span>Political Party</span>
				                        </a>                        
				                    </li>
                                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-columns" aria-hidden="true"></i>
				                            <span>Constituencies</span>
				                        </a>
                                        <ul class="nav nav-children">
                                            <li>
				                                <a class="nav-link" href="/Constituency">
				                                    Constituency
				                                </a>
				                            </li>
                                            <li>
				                                <a class="nav-link" href="">
				                                    Constituency type
				                                </a>
				                            </li>
                                        </ul>
                                    </li>
									
                                </ul>
				                    
				
				            
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        </div>
				
				</aside>
				<!-- end: sidebar -->
        
                @yield('content')
          
		    </div>
      
      

			
		</section>

		<!-- Vendor -->
		<script src="{{asset('porto/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('porto/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('porto/vendor/common/common.js')}}"></script>
		<script src="{{asset('porto/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('porto/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{ asset('porto/vendor/jquery-ui/jquery-ui.js') }}"></script>
		<script src="{{ asset('porto/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
		<script src="{{ asset('porto/vendor/select2/js/select2.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
		<script src="{{ asset('porto/vendor/fuelux/js/spinner.j') }}s"></script>
		<script src="{{ asset('porto/vendor/dropzone/dropzone.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-markdown/js/markdown.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-markdown/js/to-markdown.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-markdown/js/bootstrap-markdown.js') }}"></script>
		<script src="{{ asset('porto/vendor/codemirror/lib/codemirror.js') }}"></script>
		<script src="{{ asset('porto/vendor/codemirror/addon/selection/active-line.js') }}"></script>
		<script src="{{ asset('porto/vendor/codemirror/addon/edit/matchbrackets.js') }}"></script>
		<script src="{{ asset('porto/vendor/codemirror/mode/javascript/javascript.js') }}"></script>
		<script src="{{ asset('porto/vendor/codemirror/mode/xml/xml.js') }}"></script>
		<script src="{{ asset('porto/vendor/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
		<script src="{{ asset('porto/vendor/codemirror/mode/css/css.js') }}"></script>
		<script src="{{ asset('porto/vendor/summernote/summernote-bs4.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
		<script src="{{ asset('porto/vendor/ios7-switch/ios7-switch.js') }}"></script>
		@stack('script')

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('porto/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('porto/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('porto/js/theme.init.js')}}"></script>

	</body>
</html>