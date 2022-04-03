<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/font-awesome.css"/>
		<link rel="stylesheet" href="css/imagehover.css"/>
        <link rel="stylesheet" href="css/animate.css"/>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/wow.js"></script> 
        <script>
           wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
        </script>
</head>
	<body>
		<div class="container-fluid">
			<div class="row " style="background-color: #90a086;">
				<div class="col-sm-3 col-xs-3 col-lg-3">
					<p class="mt-3 text-center text-light" style="font-family: Courier New;">hotelmg1234@gmail.com</p>
				
				</div>	
				<div class="col-sm-5 col-xs-5 col-lg-5">
				
					<p class="mt-3 text-light"  style="font-family: Courier New;">+91 8650163913, 8564024010, 7455993925, 9670124091, 7379391006 </p>
				
				</div>
				
				<div class="col-sm-4 col-xs-4 col-lg-4">
				
					<p class="text-center fa-2x mt-1"><a href="https://www.facebook.com/Web-developer-103821487627824/?ref=bookmarks" target="_blank"><span class="fa fa-facebook text-primary"></span></a>&emsp;<a href="https://twitter.com/Avinash76562083" target="_blank"><span class="text-primary fa fa-twitter"></span></a>&emsp;<a href="https://www.instagram.com/avinashchaurasiya2000/" target="_blank"><span class="fa fa-instagram text-danger"></span></a>&emsp;<a href="https://www.youtube.com/channel/UCD2AivdJhvUrNWiFjgfRBrw?view_as=subscriber" target="_blank"><span class="text-danger fa fa-youtube-square"></span></a></p>
				
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-lg-12">
					
					<br/>
 					<p class="display-4 text-center" style="font-family: Courier New;">Hotel Management</p>
 					<br/>
 					
				</div>
			</div>
			<div class="row bg-dark"  style="position:sticky;z-index:999;top:0%;">
				<div class="col-sm-12 col-xs-12 col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light pl-5">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
					  </button>
			     	  <div class="collapse navbar-collapse " style="font-size: 25px; font-family: Courier New;" id="menu">
					    <div class="navbar-nav">
					      <a class="nav-item nav-link text-warning pl-5" href="index.php">Home </a>
					      <a class="nav-item nav-link text-warning pl-5" href="about.php">About Us</a>
					      <a class="nav-item nav-link text-warning pl-5" href="gallery.php">Gallery</a>
					      <a class="nav-item nav-link text-warning pl-5" href="register.php">Register</a>
					      <a class="nav-item nav-link text-warning pl-5" href="login.php">Login</a>
					      <a class="nav-item nav-link text-warning pl-5" href="contact.php">Contact</a>
					    </div>
					  </div>
					</nav>
				</div>
			</div>
			<div class="row" style="background-image: url('image/bgback.jpg'); background-size: 100% 100%;">
				<div class="col-sm-2 col-xs-2 col-lg-2"></div>
				<div class="col-sm-8 col-xs-8 col-lg-8">
					<p class="display-4 text-center text-light" style="text-shadow: 3px 3px 4px cyan; font-family: Courier New;">Login Form</p>	
					<form action="code/logindb.php" method="post">
						<div class="form-row">
		                    <div class="col-12">
		                    	<br/>
		                        <label class="text-light" style="text-shadow: 3px 3px 4px cyan; font-family: Courier New;">Name</label>
		                        <input type="text" name="uname" class="form-control" style="background-color: transparent; color: white;text-shadow: 2px 2px 2px red; font-family: Courier New;"/>
		                    </div>
			            </div>
			            <div class="form-row">
		                    <div class="col-12">
		                    	<br/>
		                        <label class="text-light" style="text-shadow: 3px 3px 4px cyan; font-family: Courier New;">E-mail</label>
		                        <input type="email" name="email" class="form-control" style="background-color: transparent; text-shadow: 2px 2px 2px red; color: white; font-family: Courier New;"/>
		                    </div>
			            </div>
		                <div class="form-row">
		                    <div class="col-12">
		                        <br/>
		                        <label class="text-light" style="text-shadow: 3px 3px 4px cyan; font-family: Courier New;">Password</label>
		                        <input type="password" class="form-control" name="pass" style="background-color: transparent; color: white; text-shadow: 2px 2px 2px red; font-family: Courier New;"></input>
			                </div>
			            </div>
			            <div class="form-row">
			                <div class="col-12">
			                	<br/>
		                        <span><a href="register.php" style=" color: white; text-shadow: 2px 2px 2px red; font-family: Courier New;" >Create a new account</a></span><span class="float-right"><a href="forget.php"style=" color: white; text-shadow: 2px 2px 2px red; font-family: Courier New;">Forget password?</a></span>
		                    </div>
		                </div>
		                <br/>
			            <center><button class="btn btn-warning" style=" font-family: Courier New;">Login</button></center>
			            <br/>
			            
			        </form>
				</div>
				<div class="col-sm-2 col-xs-2 col-lg-2"></div>
			</div>
			<div class="row bg-dark">
				<div class="col-sm-4 col-xs-4 col-lg-4">
					
					<p class="text-center text-light h6 mt-2" style=" font-family: Courier New;">Design & Developed By : Avinash Kumar</p>
					
				</div>
				<Div class="col-sm-4 col-xs-4 col-lg-4">
					<p class="text-light text-center h6 mt-2" style=" font-family: Courier New;">Hotel Management System</p>	
				</Div>
				<div class="col-sm-4 col-xs-4 col-lg-4">
					
					<p class="text-light text-center h6 mt-2" style=" font-family: Courier New;">Powered By : DigiCoders Technologies Pvt. Ltd</p>
					
				</div>
			</div>
		</div>
	</body>
</html>