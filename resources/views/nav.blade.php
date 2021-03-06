<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('image/digitalogo.png')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.min.css.map">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<style>
/*sticky header position*/
.sticky.is-sticky {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    z-index: 1000;
    width: 100%;
}

.nav-item .nav-link {
    text-transform: uppercase;
    font-family: tahoma;
}
ul li:hover {border-bottom:1px sloid blue;}
.dropdown-item {
    color: #fff;
    transition: .5s;
}
@media all and (max-width: 991px) {
.navbar .nav-item .dropdown-menu{
    background-color:#0039A1;font-weight: 700;
    float: left;
}
}
.dropdown:hover>.dropdown-menu a:hover {background-color:#3a3a52;color:white;
border-left:3px solid #88d3f7;border-right:3px solid #88d3f7;
}
@media all and (min-width: 992px) {
.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;   background-color:#0039A1;font-weight: 700 }
	.navbar .nav-item:hover .nav-link{ color: #0039A1;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
}
</style>
</head>
<body>
   <!--top header-->
   <header >
            <!--most top info -->
            <div style=" background: #0039a1">
            
                        <div class="container-fluid">
                        <div class="row" style="background-color:#0039a1">

                        <div class="col-sm-10 mx-auto">
                        <div class="row" >
                            <div class="col-sm-3 text-center text-white font-weight-bold p-2">
                                <p class="text-left"><i class="fa fa-envelope text-info" aria-hidden="true"></i> <b> hello@digitainstitute.com</b> </p>
                                <p class="text-left"><i class="fas fa-phone-alt text-info" ></i> <b> +88 01747448775</b></p>

                            </div>
                            <div class="col-sm-6 text-center text-white font-weight-bold mt-4  p-2">
                            <p>Online Seminar on “The Power & Process of Content Marketing”</p>
                            </div>
                            @if(Auth::check())
                            <div class="col-sm-3 text-center text-white font-weight-bold mt-3 p-2">
                                <a href="{{ route('logout') }}" class="btn btn-danger rounded-0">Logout
                                <i class='fas fa-sign-out-alt'></i>
                                </a>
                                </div>
                            @else 
                            <div class="col-sm-3 text-center text-white font-weight-bold mt-3 p-2">
                                <a href="#registerModal2" data-toggle="modal" class="btn btn-outline-info text-white rounded-0">Register now
                                </a>
                                <a href="#loginModal" data-toggle="modal" class="btn btn-info text-white rounded-0">Sign in
                                </a>
                                </div>
                            @endif
                           
                            </div>

                         </div>
                        </div>
                        </div> 
            </div>
            <!-- End most top info -->

            <nav class="navbar  navbar-expand-lg navbar-light top-navbar" data-toggle="sticky-onscroll" style="background: #ffffff;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                    <img src="{{ $bn->logo_image }}" style="height:50px;" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav pull-right">
                        {{-- <li class="nav-item text-uppercase">
                             <a class="nav-link" href="{{URL::to('/')}}" >
                                HOME
                            </a>
                                <!-- <a class="nav-link active btn btn-link" href="{{URL::to('/')}}" style="color:#0031ad; font-weight:bold;">Home</a> -->
                            </li>

                        <li  class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbardrop" data-toggle="dropdown">
                                Digital Marketing
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{URL::to('/digital-marketing-training-course-bd')}}"> Digital Marketing</a>
                                <a class="dropdown-item" href="{{URL::to('/content-marketing-course-bd')}}"> Content Marketing & Writing</a>
                                <a class="dropdown-item" href="{{URL::to('/seo-training-course-bd')}}"> SEO</a>
                                <a class="dropdown-item" href="{{URL::to('/social-media-marketing-training-course-bd')}}">Social Media Marketing</a>
                                <a class="dropdown-item" href="{{URL::to('/facebook-marketing-training-course-bd')}}"> Facebook Marketing</a>
                                <a class="dropdown-item" href="#"> Content Marketing & Writing</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="" class="text-uppercase nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown">
                               Branding
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{URL::to('/branding-training-course-bd')}}"><i class="fas fa-bahai"></i> Branding</a>
                                <a class="dropdown-item" href="{{URL::to('/employer-branding-training-course-bd')}}"><i class="fas fa-bahai"></i> Employer Branding</a>
                                <a class="dropdown-item" href="{{URL::to('/personal-branding-training-course-bd')}}"><i class="fas fa-bahai"></i> Personal Branding</a>
                                
                            </div>
                        </li>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="text-uppercase nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                IT 
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{URL::to('/web-design-training-course-bd')}}"><i class="fas fa-bahai"></i> Web Design</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Web Development</a>
                                <a class="dropdown-item" href="{{URL::to('/wordpress-training-course-bd')}}"><i class="fas fa-bahai"></i> WordPress</a>
                            </div>
                        </li>
                            
                            

                        <li class="nav-item dropdown">
                            <a class="text-uppercase nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Design & Creative
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Graphic Design</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Logo Design</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> 2D Animation</a>
                                
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="text-uppercase nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Language
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Bangla Speaking <small>(Foreigner)</small></a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Bangla Speaking</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> English Speaking</a>
                               
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="text-uppercase nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Soft Skills 
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Communication Training</a>
                               
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-link text-uppercase" href="#" id="navbardrop" data-toggle="dropdown" >
                                About Us
                            </a>
                            <div class="dropdown-menu dropdown-primary" id="your-custom-id">
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Digita Club</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Partners</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Career</a>
                              </div>
                        </li>
                     
                        <li class="nav-item">
                                <a  class="text-uppercase nav-link" href="#">Contact Us</a>
                        </li> --}}
                        <li class="nav-item text-uppercase">
                            <a class="nav-link" href="{{URL::to('/')}}" >
                               HOME
                           </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Hover down </a>
                            <ul class="dropdown-menu dropdown-menu-right fade-down">
                                <a class="dropdown-item" href="{{URL::to('/digital-marketing-training-course-bd')}}"> Digital Marketing</a>
                                <a class="dropdown-item" href="{{URL::to('/content-marketing-course-bd')}}"> Content Marketing & Writing</a>
                                <a class="dropdown-item" href="{{URL::to('/seo-training-course-bd')}}"> SEO</a>
                                <a class="dropdown-item" href="{{URL::to('/social-media-marketing-training-course-bd')}}">Social Media Marketing</a>
                                <a class="dropdown-item" href="{{URL::to('/facebook-marketing-training-course-bd')}}"> Facebook Marketing</a>
                                <a class="dropdown-item" href="#"> Content Marketing & Writing</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Branding </a>
                            <ul class="dropdown-menu dropdown-menu-right fade-down">
                                <a class="dropdown-item" href="{{URL::to('/branding-training-course-bd')}}"><i class="fas fa-bahai"></i> Branding</a>
                                <a class="dropdown-item" href="{{URL::to('/employer-branding-training-course-bd')}}"><i class="fas fa-bahai"></i> Employer Branding</a>
                                <a class="dropdown-item" href="{{URL::to('/personal-branding-training-course-bd')}}"><i class="fas fa-bahai"></i> Personal Branding</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> it </a>
                            <ul class="dropdown-menu dropdown-menu-right fade-down">
                                <a class="dropdown-item" href="{{URL::to('/web-design-training-course-bd')}}"><i class="fas fa-bahai"></i> Web Design</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Web Development</a>
                                <a class="dropdown-item" href="{{URL::to('/wordpress-training-course-bd')}}"><i class="fas fa-bahai"></i> WordPress</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> design & creative </a>
                            <ul class="dropdown-menu dropdown-menu-right fade-down">
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Graphic Design</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Logo Design</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> 2D Animation</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Language </a>
                            <ul class="dropdown-menu dropdown-menu-right fade-down">
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Bangla Speaking <small>(Foreigner)</small></a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Bangla Speaking</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> English Speaking</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Soft skills </a>
                            <ul class="dropdown-menu dropdown-menu-right fade-down">
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Communication Training</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> About us </a>
                            <ul class="dropdown-menu dropdown-menu-right fade-down">
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Digita Club</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Partners</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bahai"></i> Career</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a  class="text-uppercase nav-link" href="#">Contact Us</a>
                    </li>
                        </ul>
                      

                    </div>
                </div>
            </nav>
            


        </header>
        <!-- End top header-->


    <div class="app-main__outer">
				<div class="app-main__inner">
					@yield('content')
				</div>
		</div>


    
        
    <footer>
        

    <div class="container-fluid">
        <div class="row" style="background-color:#e7f5fa;">
        
       
              
               <div class="col-sm text-center" >
                   <img class="img responsive mt-5"src="{{ $bn->logo_image }}"alt="" style="height:60px;width:80p;">
                   <br>
                   <div class="col-sm p-2 text-center">
                      <a href=""><i class="fab fa-facebook" style="color:#355088; font-size:22px;"></i></a>
                      <a href=""><i class="fab fa-twitter" style="color:#1c9ae8; font-size:22px;"></i></a>
                      <br>
                      <a href="" class="mt-2"><i class="fab fa-youtube" style="color:#ff0000; font-size:22px;"></i></a>
                      <a href=""  class="mt-2"><i class="fab fa-linkedin" style="color:#0076b3; font-size:22px;"></i></a>
                   </div>  
                   <div class="col-sm">
                   <p><i class="fa fa-envelope text-info" aria-hidden="true"></i> <b> hello@digitainstitute.com</b> </p>
                   <p><i class="fas fa-phone-alt text-info" ></i> <b> +88 01747448775</b></p>
                   </div>  
               </div>

               <div class="col-sm text-center">
                   <h1 class="mt-5 mx-auto"style="">Share This Love</h1>
                   <button style="font-size:20px;padding:5px;width:120px;background-color:#355088" class="mb-2 text-white btn text-left"><i class="fab fa-facebook"></i> facebook</button>
                   <br>
                   <button style="font-size:20px;padding:5px;width:120px;background-color:#1da1f2" class="mb-2 text-white btn text-left"><i class="fab fa-twitter"></i> twitter</button>
                   <br>
                   <button style="font-size:20px;padding:5px;width:120px;background-color:#0074b0" class="text-white btn text-left"><i class="fab fa-linkedin"></i> linkedin</button>
                   
                   
               </div>


               <div class="col-sm text-center" >
                 <div class="col-sm-9 mx-auto mt-5 mb-5 border text-center" style="border-color:transparent;background-color:#bde8f9;border-radius:5px;">
                 <h3 style="margin-top:10%;" class="col-sm">Contact Us</h3>
                 <form action="" class="justify-content-center">
                    
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col">
                        <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                        <textarea class="form-control" rows="4" cols="50" placeholder="Write message here..."></textarea>
                        </div>
                    </div>
                    
                    
                   

                    <div class="form-group">
                      <label class="col-sm-3 mx-auto col-form-label form-control-label"></label>
                      <div class="col-sm-9 mx-auto">
                        <input type="submit" class="btn text-white" style="background-color:#003190;" value="Send">
                      </div>
                    </div>
                 
                 </form>
                 </div>
               </div>
            </div>
        
    </div>

 
    <div class="container-fluid">
        <div class="row" style="background-color:#0039a1;">
        
        <div class="col-sm-10 mx-auto p-2 text-white">
            <div class="row">
               <div class="col-sm-6" >
                 <h6>© Digital Institute-2020</h6>
               </div>

               <div class="col-sm-6 text-right">
                   <p class="d-inline mr-5">Privacy Policy</p>
                   <p class="d-inline">Term & Condition</p>
                   
               </div>


            </div>
        </div>
        </div>
    </div>
  </footer>  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
// Sticky navbar
// =========================
    $(document).ready(function () {
                // Custom function which toggles between sticky class (is-sticky)
                var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                    var stickyHeight = sticky.outerHeight();
                    var stickyTop = stickyWrapper.offset().top;
                    if (scrollElement.scrollTop() >= stickyTop) {
                        stickyWrapper.height(stickyHeight);
                        sticky.addClass("is-sticky");
                    }
                    else {
                        sticky.removeClass("is-sticky");
                        stickyWrapper.height('auto');
                    }
                };

                // Find all data-toggle="sticky-onscroll" elements
                $('[data-toggle="sticky-onscroll"]').each(function () {
                    var sticky = $(this);
                    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                    sticky.before(stickyWrapper);
                    sticky.addClass('sticky');

                    // Scroll & resize events
                    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                        stickyToggle(sticky, stickyWrapper, $(this));
                    });

                    // On page load
                    stickyToggle(sticky, stickyWrapper, $(window));
                });

               
               
    });
</script>


<div id="registerModal" class="modal-style-2 dark modal ">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header p-0">				
					<h4 class="modal-title">Register</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="" method="post" class="mt-3">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="name" placeholder="Enter your name" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="text" class="form-control" name="email" placeholder="Enter email address" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
								<input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required="required" autocomplete="on">
							</div>
						</div>

						<div class="form-group text-center">
							<button id="signup-button" type="submit" class="btn btn-primary btn-sm">Register</button>
							
						</div>
					</form>

				</div>
				<!-- social icons -->
				<p class="hint-text">or register with</p>
				<div class="social-login text-center mb-2">
					<a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
					<a class=" btn-facebook  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
					<a class=" btn-facebook  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
				</div>
				<div class="modal-footer">Already have an account? <a href="#loginModal2" data-dismiss="modal" data-toggle="modal"> Login</a></div>
			</div>
		</div>
	</div> 


    <div class="modal fade" id="registerModal2">
    <div class="modal-dialog ">
      <div class="modal-content bg-dark text-white">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-center">Register here</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="POST" action="{{ route('register') }}" class="mt-3">
            @csrf
						                   <div class="form-group">
                                            <div class="input-group mb-3 p-2" >
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-user"></i></span>
                                                    </div>
                                                       <input type="text" class="form-control" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" name="first_name" placeholder="Enter your first name" required="required">
                                            </div>
                                            </div>
						                   <div class="form-group">
                                            <div class="input-group mb-3 p-2" >
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-user"></i></span>
                                                    </div>
                                                       <input type="text" class="form-control" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" name="last_name" placeholder="Enter your last name" required="required">
                                            </div>
                                            </div>


                                            <div class="form-group">
                                            <div class="input-group mb-3 p-2" >
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-envelope"></i></span>
                                                    </div>
                                                       <input type="email" class="form-control" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" name="email" placeholder="Your email address" required="required">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="input-group mb-3 p-2" >
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                       <input type="text" class="form-control" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" name="phone" placeholder="Your Contat number" required="required">
                                            </div>
                                            </div>
                                             {{-- <div class="input-group mb-3 p-2">
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fas fa-graduation-cap"></i></span>
                                                    </div>
                                                    <select class="form-control" style="border-top-right-radius:20px;border-bottom-right-radius:20px;"id="sel1">
                                                        <option style="border-bottom:1px solid black">Select course</option>
                                                        
                                                        @php
                                                             $courses = DB::table('coursedetail')
                                                            ->get(); 
                                                        @endphp
                                                       
                                                        
                                                        @foreach($courses as $c)
                                                        <option>{{$c->name}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>  --}}
                                            <div class="form-group">
                                            <div class="input-group mb-3 p-2">
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
                                            </div>
                                            </div>


                                            <div class="form-group">
                                            <div class="input-group mb-3 p-2">
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-eye-slash"></i></span>
                                                    </div>
                                                    <input type="password" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" class="form-control" name="password_confirmation" placeholder="confrim password" required="required" autocomplete="on">
                                            </div>
                                            <!-- <ul class="text-muted">
                                                <ol><small>Password must contain one of $, %, ^, &</small></ol>
                                                <ol><small>Password must contain min 8 charecter</small></ol>
                                            </ul>    -->
                                            </div>
                                            
                                            
                                       


                                            
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary btn-signin w-100" style="border-radius:40px;" >Register</button>
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            </div>
                                            
                                            <!-- social login area -->
                                            <div class="social-login text-center">
                                                <a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
                                                <a class=" btn-google  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
                                                <a class=" btn-twitter  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
                                            </div>
                                       
					</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


  {{--====================== login modal ==========================--}}
  <div class="modal fade" id="loginModal">
    <div class="modal-dialog ">
      <div class="modal-content bg-dark text-white">
      
        <!-- Modal Header -->
        <div class="modal-header">
        
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="login-form-area m-4">
            <h4 class="modal-title text-center mt-3 mb-3 login-header-content">SIGN IN HERE</h4>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mt-4">
                     <div class="input-group mb-3 p-2" >
                        <div class="input-group-prepend"> 
                          <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-envelope"></i></span>
                        </div>
                           {{-- <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your email address"> --}}
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  autofocus  placeholder="Your email address" style="border-top-right-radius:20px;border-bottom-right-radius:20px;">
                     </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">

                        {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Your password"> --}}

                      
                        <div class="input-group mb-3 p-2">
                            <div class="input-group-prepend"> 
                              <span class="input-group-text mr-2 bg-info text-white " style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" id="password" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Your password">
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group row pl-3">
                    <div class="col-md-12 d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    </div>
                </div>

                <div class="form-group row mb-0 float-right">
                        <button type="submit" class="btn btn-primary mr-4 rounded-0">
                            {{ __('Login') }}
                        </button>
                </div>
            </form>
           </div>
        </div>
     
        
      </div>
    </div>
  </div>
  
</div>
</body>
</html> 