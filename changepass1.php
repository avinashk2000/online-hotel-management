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
 					<p class="display-4 text-center" style="font-family: Courier New;">Profile</p>
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
					     <a class="nav-item nav-link text-warning pl-5 " href="changepass1.php">Changepassword </a>
					      &emsp;
					      <a class="nav-item nav-link text-warning pl-5 " href="login1.php">LogOut</a>
					    </div>
					  </div>
					</nav>
				</div>
			</div>
			<div class="row" style="background-image: url('image/bgback.jpg'); background-size: 100% 100%;">
			<div class="col-sm-2 col-xs-2 col-lg-2">
			</div>
			<div class="col-sm-8 col-xs-8 col-lg-8">
				<br/><br/><br/>
				<form action="changepassdb1.php" method="post">
					<div class="form-group">
						<div class="form-row">
							<div class="col-12">
								<label style="text-shadow: 3px 3px 4px cyan;  color:white; font-size: 30px; font-family: Courier New;">Old Password</label>
								<input type="password" name="olp" class="form-control"  style="text-shadow: 3px 3px 4px cyan;  color:white; font-size: 30px; font-family: Courier New; background-color: transparent;"/>
							</div>
						</div>
						<div class="form-row">
							<div class="col-12">
								<label  style="text-shadow: 3px 3px 4px cyan; font-family: Courier New; color:white; font-size: 30px;">New Password</label>
								<input type="password" name="np" class="form-control" style="text-shadow: 3px 3px 4px cyan;  color:white; font-size: 30px; font-family: Courier New; background-color: transparent;"/>
							</div>
						</div>
						<div class="form-row">
							<div class="col-12">
								<label  style="text-shadow: 3px 3px 4px cyan; color:white; font-size: 30px; font-family: Courier New;">Confirm Password</label>
								<input type="password" name="cnp" class="form-control" style="text-shadow: 3px 3px 4px cyan;  color:white; font-size: 30px; font-family: Courier New; background-color: transparent;"/>
							</div>
						</div>
						<br/>
						<center><button class="btn btn-danger">Change</button></center>
					</div>
				</form>
				<br/><br/><br/><br/>
			</div>
			<div class="col-sm-2 col-xs-2 col-lg-2"></div>
		</div>
		</div>
	</body>
</html>