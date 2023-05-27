<!DOCTYPE html>

<head>
	
    <title>PIZZA::LOGIN</title>
		
	<!-- style.css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- font-awesome.min.css -->
	<link href="" rel="stylesheet">
	
	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
				<!-- top-bar -->
		<div class="border-bottom">
			<div class="container">
				<div class="row middle-flex">
					<div class="col-xl-7 text-center">
						<div class="row">
							<div class="header-top">
								<p class="text-da">
									<img src="images/address.png" height="15px" width="15px">Karachi, Pakistan</img>
								</p>
							</div>
							<div class="header-top">
								<p class="text-da">
									<img src="images/phone.jpg" height="20px" width="25px">111-241-241</img> 
								</p>
							</div>
						</div>
					</div>
					<div class="col-xl-5 text-center ">
						<div class="row middle-flex">
							<div class="col-lg-7">
								<!-- social icons -->
								<ul class="top-right-info">
									<li>
										<p>Follow Us:</p>
									</li>
									<li class="facebook">
										<a href="https://www.facebook.com/PizzaHutPak/">
											<img src="images/facebook.png" height="20px" width="20px">
										</a>
									</li>
									<li class="twitter">
										<a href="https://twitter.com/pizzahutpak?lang=en">
											<img src="images/twitter.png" height="20px" width="20px">
										</a>
									</li>
									<li class="google">
										<a href="https://www.pizzahut.com.pk/">
											<img src="images/google+.png" height="20px" width="20px">
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- //top-bar -->

	<!-- navigation -->
		<div class="container">
			<div class="nav-content">
				<!-- logo -->
				<h1>
					<a  class="logo">
						<img src="images/logo.jpg" alt="" height="auto"><span>HUT</span> PIZZA
					</a>
				</h1>
			</div>
		</div>
	<!-- //navigation -->
	<!-- //header 2 -->

    	<!-- login -->
	<div class="py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Login Now</h5>
					<form action="" method="post">		
							<label class="label-write">Your Name</label>
							<input type="text" class="width_form_login" name="name" placeholder="" required>
							<label class="label-write password-top">Password</label>
							<input type="password" class="width_form_login" name="password" placeholder="" required>
						    <button type="submit" name="submit" class="btn submit-login submit-contact ml-auto">Submit</button>
					</form>
                    <?php 
                      if(isset($_POST['submit']))
					  {
					    $name = "sataza";
                        $password = "stz123";

                        if (isset($_POST["name"]) && isset($_POST["password"])) { 

                             if ($_POST["name"] === $name && $_POST["password"] === $password) { 
    
                                      header("Location: index_1.php"); 
    
                                   } 
        
                              else
							  {
								  echo "Wrong username or password";
							  }
                             }
					  }
					  ?> 

				</div>
			</div>
		</div>
	</div>
	<!-- //login -->

	                         
		<!-- footer -->
	<footer>
		<div class="container py-xl-4">
			<div class="row">
				<div class="col-lg-4 footer-text">
					<!-- logo -->
					<h2>
						<a class="logo">
							<img src="images/logo.png" alt=""><span>HUT</span>PIZZA
						</a>
					</h2>
					<!-- //logo -->
					<p>Better ingredients, better pizza - it's not a slogan..</p>
					<!-- social icons -->
					<ul class="top-right-info">
						<li>
							<p>Follow As:</p>
						</li>
						<li class="facebook">
							<a href="https://www.facebook.com/PizzaHutPak/">
								<img src="images/facebook.png" height="20px" width="20px">
							</a>
						</li>
						<li class="twitter">
							<a href="https://twitter.com/pizzahutpak?lang=en">
								<img src="images/twitter.png" height="20px" width="20px">
							</a>
						</li>
						<li class="google">
							<a href="https://www.pizzahut.com.pk/">
								<img src="images/google+.png" height="20px" width="20px"/>
							</a>
						</li>
					</ul>
					<!-- //social icons -->
				</div>
				<div class="col-lg-4">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="footer-text">
						<p>Address : MCR Pvt Ltd, 7th Floor, Shahnaz Arcade, Shaheed-e-Millat Road, Karachi, Pakistan</p>
						<p >Phone : 111-241-241</p>
						<p>Email : <a href="mailto:ordering@pizzahut.com.pk">ordering@pizzahut.com.pk</a></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer-title">
						<h3>Request Info</h3>
					</div>
					<div class="info-form-right ">
                    	<form action="index.php" method="post">
							<div class="row">
								<div class="col-lg-6 mb-2 pr-lg-1">
									<input type="text" name="Name" placeholder="Name" required> <!-- required means popup -->
								</div>
								<div class="col-lg-6  mb-2 pl-lg-1">
									<input type="text" name="Phone" placeholder="Phone" required>
								</div>
							</div>
							<div class="mb-2">
								<input type="email" class="width_form" name="Email" placeholder="Email" required>
							</div>
							<div class="mb-2">
								<textarea name="Comment" class="width_form" placeholder="Comment" required></textarea>
							</div>
							<button type="submit" name="Submit" class="btn submit-contact-top submit-contact ml-auto">Submit</button>
						</form>
    				</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2019 PIZZA HUT. All rights reserved | Design by Taimoor Imran Baig, Zain Uddin & Sarim Bin Faisal
		</p>
	</div>
	<!-- //copyright -->

</body>

</html>