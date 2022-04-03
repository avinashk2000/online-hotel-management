<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
        	.frm
        	{
        		background-image: url('image/bgback.jpg');
        		background-size: 100% 100%;
        		
        	}
        	.fnm
        	{
        		background-color: rgba(30,20,10,0.3);
        	}
        </style>
</head>
	<body>
		<div class="container-fluid">
			<div class="row"  style="background-color: #90a086;">
				<div class="col-sm-3 col-xs-3 col-lg-3">
					<p class="mt-3 text-center text-light" style="font-family: Courier New;">hotelmg1234@gmail.com</p>
				
				</div>	
				<div class="col-sm-5 col-xs-5 col-lg-5">
				
					<p class="mt-3 text-light"  style="font-family: Courier New;">+91 8650163913, 8564024010, 7455993925, 9670124091, 7379391006 </p>
				
				</div>
				
				<div class="col-sm-4 col-xs-4 col-lg-4">
				
					<p class="text-center fa-2x mt-1" ><a href="https://www.facebook.com/Web-developer-103821487627824/?ref=bookmarks" target="_blank"><span class="fa fa-facebook text-primary"></span></a>&emsp;<a href="https://twitter.com/Avinash76562083" target="_blank"><span class="text-primary fa fa-twitter"></span></a>&emsp;<a href="https://www.instagram.com/avinashchaurasiya2000/" target="_blank"><span class="fa fa-instagram text-danger"></span></a>&emsp;<a href="https://www.youtube.com/channel/UCD2AivdJhvUrNWiFjgfRBrw?view_as=subscriber" target="_blank"><span class="text-danger fa fa-youtube-square"></span></a></p>
				
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-lg-12">
					<br/>
					
 					<p class="display-4 text-center" style="font-family: Courier New;">Hotel Management</p>
 					<br/>
				</div>
			</div>
			<div class="row bg-dark" style="position:sticky;z-index:999;top:0%;">
				<div class="col-sm-12 col-xs-12 col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light pl-5">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
					  </button>
			     	  <div class="collapse navbar-collapse " style="font-size: 25px;" id="menu">
					    <div class="navbar-nav">
					      <a class="nav-item nav-link text-warning pl-5" href="index.php" style="font-family: Courier New;">Home </a>
					      <a class="nav-item nav-link text-warning pl-5" href="about.php" style="font-family: Courier New;">About Us</a>
					      <a class="nav-item nav-link text-warning pl-5" href="gallery.php" style="font-family: Courier New;">Gallery</a>
					      <a class="nav-item nav-link text-warning pl-5" href="register.php" style="font-family: Courier New;">Register</a>
					      <a class="nav-item nav-link text-warning pl-5" href="login.php" style="font-family: Courier New;">Login</a>
					      <a class="nav-item nav-link text-warning pl-5" href="contact.php" style="font-family: Courier New;">Contact</a>
					    </div>
					  </div>
					</nav>
				</div>
			</div>
			<div class="row frm">
				<div class="col-sm-12 fnm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-xs-12 col-lg-12">
								<p class="display-4 text-center" style="color: white; text-shadow: 3px 3px 3px orange; font-family: Courier New;">Register Now</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-xs-12 col-lg-12">
			                    <form action="code/registerdb.php" method="post">
			                        <div class="form-row">
			                            <div class="col-12">
			                                <label class="text-light" style="font-family: Courier New;">Name</label>
			                                <input type="text" name="un" class="form-control" style="background-color: transparent; color: white;text-shadow: 2px 2px 2px red; font-family: Courier New;"/>
			                            </div>
			                        </div>
			                        <div class="form-row">
			                            <div class="col-12">
			                                <label class="text-light" style="font-family: Courier New;">Mobile</label>
			                                <input type="number" name="mn" class="form-control"  style="background-color: transparent; color: white;text-shadow: 2px 2px 2px red; font-family: Courier New;"/>
			                            </div>
			                        </div>
			                        <div class="form-row">
			                            <div class="col-12">
			                                <label class="text-light" style="font-family: Courier New;">E-Mail</label>
			                                <input type="email" class="form-control" name="eml" style="background-color: transparent; color: white;text-shadow: 2px 2px 2px red; font-family: Courier New;"/>
			                            </div>
			                        </div>
			                        <div class="form-row">
			                            <div class="col-12">
			                                <label class="text-light" style="font-family: Courier New;">Password</label>
			                                <input type="password" name="ps" class="form-control" style="background-color: transparent; color: white;text-shadow: 2px 2px 2px red; font-family: Courier New;"/>
			                            </div>
			                        </div>
			                        <div class="form-row">
			                        	<div class="col-12">
			                        		<br/>
			                        		<label class="text-light" style="font-family: Courier New;">Gender</label>
			                        		<input type="radio" name="gnd" value="Male" class="ml-5" /><span class="text-light" style=" color: white;text-shadow: 2px 2px 2px red; font-family: Courier New;">Male</span>
			                        		<input type="radio" name="gnd" value="Female" class="ml-5" /><span class="text-light" style=" color: white;text-shadow: 2px 2px 2px red; font-family: Courier New;">Female</span>
			                        	</div>
			                        </div>
			                        <div class="form-row">
			                        	<div class="col-12">
			                        		<label class="text-light" style="font-family: Courier New;">City</label>
			                        		<select class="form-control" style="background-color: transparent; color:red;text-shadow: 2px 2px 2px white;" style="font-family: Courier New;" name="ct">
			                        			<option style="font-family: Courier New;">Select City....</option>
			                        			<option style="font-family: Courier New;">Agra</option>
												<option style="font-family: Courier New;">Aligarh</option>
												<option style="font-family: Courier New;">Allahabad</option>
												<option style="font-family: Courier New;">Ambedkar Nagar</option>
												<option style="font-family: Courier New;">Amethi</option>
												<option style="font-family: Courier New;">Amroha</option>
												<option style="font-family: Courier New;">Auraiya</option>
												<option style="font-family: Courier New;">Azamgarh</option>
												<option style="font-family: Courier New;">Badaun</option>
												<option style="font-family: Courier New;">Baghpat</option>
												<option style="font-family: Courier New;">Bahraich</option>
												<option style="font-family: Courier New;">Ballia</option>
												<option style="font-family: Courier New;">Balrampur</option>
												<option style="font-family: Courier New;">Banda</option>
												<option style="font-family: Courier New;">Barabanki</option>
												<option style="font-family: Courier New;">Bareilly</option>
												<option style="font-family: Courier New;">Basti</option>
												<option style="font-family: Courier New;">Bijnor</option>
												<option style="font-family: Courier New;">Bulandshahr</option>
												<option style="font-family: Courier New;">Chandauli</option>
												<option style="font-family: Courier New;">Chitrakoot</option>
												<option style="font-family: Courier New;">Deoria</option>
												<option style="font-family: Courier New;">Etah</option>
												<option style="font-family: Courier New;">Etawah</option>
												<option style="font-family: Courier New;">Faizabad</option>
												<option style="font-family: Courier New;">Farrukhabad</option>
												<option style="font-family: Courier New;">Fatehpur</option>
												<option style="font-family: Courier New;">Gautam Buddha Nagar</option>
												<option style="font-family: Courier New;">Ghaziabad</option>
												<option style="font-family: Courier New;">Ghajipur</option>
												<option style="font-family: Courier New;">Gonda</option>
												<option style="font-family: Courier New;">Gorakhpur</option>
												<option style="font-family: Courier New;">Hamirpur</option>
												<option style="font-family: Courier New;">Hapur</option>
												<option style="font-family: Courier New;">Hardoi</option>
												<option style="font-family: Courier New;">Hathras</option>
												<option style="font-family: Courier New;">Jalaun</option>
												<option style="font-family: Courier New;">Jaunpur</option>
												<option style="font-family: Courier New;">Jhansi</option>
												<option style="font-family: Courier New;">Kannauj</option>
												<option style="font-family: Courier New;">Kanpur Dehat</option>
												<option style="font-family: Courier New;">Kanpur Nagar</option>
												<option style="font-family: Courier New;">Kasganj</option>
												<option style="font-family: Courier New;">Kaushambi</option>
												<option style="font-family: Courier New;">Kushinagar</option>
												<option style="font-family: Courier New;">Lakhimpur Kheri</option>
												<option style="font-family: Courier New;">Lalitpur</option>
												<option style="font-family: Courier New;">Lucknow</option>
												<option style="font-family: Courier New;">Maharajganj</option>
												<option style="font-family: Courier New;">Mainpuri</option>
												<option style="font-family: Courier New;">Mathura</option>
												<option style="font-family: Courier New;">Mau</option>
												<option style="font-family: Courier New;">Meerut</option>
												<option style="font-family: Courier New;">Mirzapur</option>
												<option style="font-family: Courier New;">Pilibhit</option>
												<option style="font-family: Courier New;">Pratapgarh</option>
												<option style="font-family: Courier New;">Raebareli</option>
												<option style="font-family: Courier New;">Rampur</option>
												<option style="font-family: Courier New;">Saharanpur</option>
												<option style="font-family: Courier New;">Sambhal</option>
												<option style="font-family: Courier New;">Sant Kabir Nagar</option>
												<option style="font-family: Courier New;">Sant Ravidas Nagar</option>
												<option style="font-family: Courier New;">Shahjahanpur</option>
												<option style="font-family: Courier New;">Shamli</option>
												<option style="font-family: Courier New;">Shravasti</option>
												<option style="font-family: Courier New;">Siddharthnagar</option>
												<option style="font-family: Courier New;">Sitapur</option>
												<option style="font-family: Courier New;">Sonbhadra</option>
												<option style="font-family: Courier New;">Sultanpur</option>
												<option style="font-family: Courier New;">Unnao</option>
												<option style="font-family: Courier New;">Varanasi</option>
			                        		</select>
			                        		
			                        	</div>
			                        </div>
			                        <br/>
			                        <div class="form-row">
			                        	<div class="col-12">
			                        		<center><button class="btn btn-warning"style=" font-family: Courier New;">Submit</button></center>
			                        		
			                        		<br/>
			                        	</div>
			                        </div>
			                    </form>
			                </div>
						</div>
					</div>
				</div>
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