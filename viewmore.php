<!DOCTYPE html>
<html>
<head>
	<title>Room Details</title>
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
	<div class="container-fluid" id="room">
		<div class="row">
			<div class="col-sm-4 col-xs-4 col-lg-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/hotel8.png"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi" style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center" style=" font-family: Courier New;">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xs-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/img/img_1.jpg"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi" style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center" style=" font-family: Courier New;">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
			</div>
			<div class="col-sm-4 col-xs-4 col-lg-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/img/img_2.jpg"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi"style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center" style=" font-family: Courier New;">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-4 col-lg-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/img/img_3.jpg"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi" style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center" style=" font-family: Courier New;">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xs-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/img/img_4.jpg"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi" style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
			</div>
			<div class="col-sm-4 col-xs-4 col-lg-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/img/img_5.jpg"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi" style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form  action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-4 col-lg-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/hotel9.jpg"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi" style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center" style=" font-family: Courier New;">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form  action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xs-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/hotel9.jpg"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi" style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center" style=" font-family: Courier New;">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
			</div>
			<div class="col-sm-4 col-xs-4 col-lg-4">
				<br/>
                <div class="card rounded border-0">
	                <figure class="imghvr-hinge-down" style="background-color:#367590;">
	 					<img src=" image/hotel.jpg"class="w-100"/>
  						<figcaption>
  							<br/>
  							<br/>
  							<br/>
    						<h1 class="text-center" data-toggle="modal" data-target="#avi" style=" font-family: Courier New;">Family ROOM</h1>
    						<br/>
    						<p class="text-center" style=" font-family: Courier New;">$400.00 / per night</p>
  						</figcaption>
					</figure>
                    <br/>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Book Room</button>
                                <!--modal-->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <br/>
                          <form action="code/book_roomdb.php" method="post">
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>First Name</label>
                                <input type="text" name="fn" class="form-control"  required />
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Last Name</label>
                                <input type="text" name="ln" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>E-Mail</label>
                                <input type="email" name="eml" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Mobile No</label>
                                <input type="number" name="mn" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-4">
                                <label>Check-In-Date</label>
                                <input type="datetime-local" name="cid" class="form-control" required/>
                              </div>
                              <div class="col-4">
                                <label>Check-Out-Date</label>
                                <input type="datetime-local" name="cod" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Pickup Address</label>
                                <textarea name="pad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Destination Address</label>
                                <textarea name="dad" class="form-control" required></textarea>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <div class="form-row">
                              <div class="col-2"></div>
                              <div class="col-8">
                                <label>Payment</label>
                                <input type="text" name="pay" class="form-control" required/>
                              </div>
                              <div class="col-2"></div>
                            </div>
                            <br/>
                            <center><button class="btn btn-warning">BOOK</button></center>
                          </form>
                          <br/>
                      </div>
                    </div>
                  </div>


                                <!--modal-->
                </div>
                <br/>
			</div>
		</div>
	</div>
</body>
</html>