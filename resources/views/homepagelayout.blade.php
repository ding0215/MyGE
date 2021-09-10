
<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>myge</title>

        <link rel = "icon" href = "{{asset('/porto/img/myLogo.png')}}" type = "image/x-icon">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

		<!-- Vendor CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
		@yield('css')

	</head>
	<body>
		<section class="body">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="product.php">All</a>
                <a href="contactpage.php">Contact</a>
            </div>

            <!-- Navbar -->
                <div class="container mw-100 p-3 m-0" style="background:rgba(252, 252, 252, 1); box-shadow: 0 4px 12px 0 rgba(0,0,0,.07),0 2px 4px rgba(0,0,0,.05);position: -webkit-sticky;position: sticky;top: 0;z-index:2;">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <a id="sidebtn" class="btn btn-outline-dark" style="font-size:20px;" onclick="openNav()" data-mdb-ripple-color="dark">
                                    <i id="btn" class="fa fa-bars"></i>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center">
                            <a class="" href="/homepage">
                                <img src="{{asset('/porto/img/myLogo2.png')}}" width="120" height="50" alt="MyGE" />
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 text-right">
                            <a href="/register" id="btn" class="btn btn-outline-dark btn-md text-center" style="font-size:15px; padding:10px 60px 10px 60px; " data-mdb-ripple-color="dark">
                                <b>Register</b>
                            </a>
                        </div>
                    </div>
                </div>
            <!-- Navbar -->
            
            <div class="bg-image" style="
      background-image: url('{{asset('/porto/img/background1.jpg')}}');
      height: 100%;
    ">
			@yield('content')
            
        

            <footer class="bg-dark text-center text-white" style="margin-top:10%">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-facebook-f"></i
                    ></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-twitter"></i
                    ></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-google"></i
                    ></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-instagram"></i
                    ></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-linkedin-in"></i
                    ></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-github"></i
                    ></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
            </footer>
		</div>	
		</section>

		<!-- Vendor -->
        <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		
		<script src="{{asset('porto/vendor/bootstrap/js/bootstrap.js')}}"></script>
        
        <script>
            //Get the button
            var mybutton = document.getElementById("topbtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
            if (document.body.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
            }

            /* Set the width of the side navigation to 250px */
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            } 

            var sidenav = document.getElementById("mySidenav");


            $('body').click(function(evt){    
                if(!$(evt.target).is('#mySidenav') && !$(evt.target).is('#sidebtn')) {
                    closeNav();
                }
            });
            


        </script>
        
        @stack('script')

	</body>
</html>