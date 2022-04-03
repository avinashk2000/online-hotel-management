<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
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
        <style>
        	#sk
        	{
        		animation: avi 2s linear infinite;
        		transform: rotate(180deg);
        	}
        </style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row  bg-light">
				<div class="col-sm-8 col-xs-8 col-lg-8">
					<div class="btn-group mt-2" role="group" aria-label="Basic example">
						<button type="button" class="btn btn-light"><span class="fa fa-home"></span> <big>Home</big></button>
						<button type="button" class="btn btn-light"><span class="fa fa-file"></span> <big>Pages</big></button>
						<button type="button" class="btn btn-light"><span class="fa fa-envelope"></span> <big>Message</big></button>
						<button type="button" class="btn btn-light"><span class="fa fa-signal"></span> <big>Stats</big></button>
						<button type="button" class="btn btn-light"><span class="fa fa-lock"></span> <big>Permission</big></button>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 col-lg-4">
					<div class="dropdown">
					    <button class="btn btn-light dropdown-toggle mt-3 border float-right" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="fa fa-user"></span> <big>admin</big>
					    </button>
					    <br/><br/>
				        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					   	    <a class="dropdown-item" href="#"><span class="fa fa-lock"></span> Change Password</a>
					        <a class="dropdown-item" href="#"><span class="fa fa-share-square-o"></span> Logout</a>
					  </div>
					</div>
					<br>
				</div>
			</div>
		</div>
	</body>
</html>