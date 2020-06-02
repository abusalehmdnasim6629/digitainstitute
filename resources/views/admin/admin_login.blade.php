<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Customized bootstrap login forms with multiple variants. Easy to customize.">
	<meta name="keywords" content="Bootstrap Modal, Login Form, Modal Login, Registration Form, Form, Bootstrap, Login, Registration">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('image/digitalogo.png')}}">
	<title>Digita Institute Admin Login</title>


	<!-- font awesome v5.5.0 free version -->
	<link href="admin_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<!-- bootstrap version v4.0.0 -->
	<link href="admin_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- custom css -->
	<link href="admin_assets/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="main-container ">
		<h3 class="display-4 text-center mt-4">Digita Institute Admin Login</h3>
          @if (Session::get('ps'))
            <div class="alert alert-danger">
                <p><b><?php echo Session::get('ps');?></b></p>
                <?php Session::put('ps',null)?>

             </div>
          @endif

          @if (Session::get('em'))
            <div class="alert alert-danger">
                <p><b><?php echo Session::get('em');?></b></p>
                <?php Session::put('em',null)?>

             </div>
          @endif

		<div class="row text-center mt-5 ">
			<div class="col-sm-4 mx-auto bg-dark text-white button-card h-100 justify-content-center align-items-center">
				<div class="">
					
					
                    <div  class=" ">
                            <div class="">
                                <div class="">
                                    <div class=" p-0 mb-3 mt-3">				
                                        <h4 class="modal-title">login</h4>
                                        
                                    </div>
                                    <div class="">
                                        <!-- dont forget to add action and action method  -->
                                        <form action="{{url('/login-check')}}" method="post">
                                        {{csrf_field()}}
                                            <div class="form-group">
                                            <div class="input-group mb-3 p-2" >
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-envelope"></i></span>
                                                    </div>
                                                       <input type="email" class="form-control" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" name="email" placeholder="Enter email address" required="required">
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <div class="input-group mb-3 p-2">
                                                    <div class="input-group-prepend"> 
                                                      <span class="input-group-text mr-2 bg-info text-white" style="border-top-left-radius:20px;border-bottom-left-radius:20px;"><i class="fa fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" style="border-top-right-radius:20px;border-bottom-right-radius:20px;" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
                                            </div>
                                            </div>


                                            <div class="row pl-1 pr-1">
                                                <div class="col text-left">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                                        <span class="custom-control-label">&nbsp;Remember Me</span>
                                                    </label>
                                                </div>
                                                <div class="col text-right hint-text pt-0">
                                                    <a href="" class="text-muted">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary btn-signin w-100" style="border-radius:40px;" >Login</button>
                                                
                                            </div>
                                            <p class="mt-3">or login with</p>
                                            <!-- social login area -->
                                            <div class="social-login text-center">
                                                <a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
                                                <a class=" btn-google  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
                                                <a class=" btn-twitter  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text-center mb-3">Don't have an account? <a class="register" href="{{URL::to('/admin-registration')}}" >Register</a></div>
                                </div>
                            </div>
                        </div>  
				</div>
			</div>
			
			
		</div>
	</div>



<!--modal style 3 end -->

	<!-- include scripts here -->

	<!-- jQuery v3.5.0 -->
	<script src="admin_assets/js/jquery-3.5.1.min.js" ></script>
	<!-- bootstrap js -->
	<script src="admin_assets/vendor/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>