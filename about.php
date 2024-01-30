
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About </title>

	
	<!-- <link rel="stylesheet" href="css/index.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/ca0905f6a5.js"></script>
	<link href="css/jquery-ui.css" rel="stylesheet">

	
</head>
<body>
	<!-- Class Blog = Main Div Except Footer -->
	<div class="blog">
		<!-- Navbar -->

		<nav class="navbar navbar-expand-md navbar-light bg-dark">
		  <a class="navbar-brand" href="#"><i class="fas fa-tree"></i> Mobile shop website</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Home</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="about.php">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact.php">Contact</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="shoplist.php">shoplist</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" id="autocomplete" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
		    </form>
		  </div>
		</nav>

		<!-- Navbar Ends -->

		<!-- Main Section -->

		<div class="container">
			<div>
				<div class="row">
					<div class="col-md-4 title">
						<h1 class="text-blog">about us </h1>
						 <p class="lead-para"> Welcome to Mobile Showcase, your one-stop destination for all things mobile! We are passionate about
                mobile technology and are dedicated to bringing you the latest and greatest in the world of smartphones,
                mobile apps, and gadgets</p> 
					</div>
				</div>
			</div>

						<div class="col-md-3 col-sm-6">
							<div class="team">
								<div class="card">
									<img src="images/user.png" class="card-img-top team-img"  alt="">
									<div class="card-body">
										<h4 class="card-title teamTitle">mohamad</h4>
										<div class="social">
											<a href="#" class="linkedin" data-toggle="tooltip" title="Linkedin"><i class="fab fa-linkedin"></i></a>
											<a href="#" class="facebook" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-square"></i></a>
											<a href="#" class="github" data-toggle="tooltip" title="Github"><i class="fab fa-github"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 

					<!-- About us Content -->
					<div class="row about-C">
						<div class="col-md-12">
							<div class="aboutContent">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sint similique nesciunt, optio placeat soluta, praesentium. Repudiandae, dolor sequi corporis eos, architecto pariatur voluptatibus eius deleniti totam, atque debitis libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui cumque blanditiis eius quasi sequi placeat corrupti velit a. Quis tempore earum nostrum rem alias optio nihil aliquam soluta in quibusdam</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			
		</div>
		<!--  - Left Panel ENDS -->


		<!-- Main Section Ends -->

		<footer class="container-fluid">
			<p>Developed by mohamad hafeed </p>
			<p> <a href=""><i class="fab fa-facebook-square"></i> </a> | <a href=""><i class="fab fa-instagram"></i></a> | <a href=""><i class="fab fa-linkedin"></i></a> </p>
		</footer>
	</div>
	<script src="external/jquery/jquery.js"></script>
	<script src="jquery-ui.js"></script>
	<script>
		var availableTags = [
			"Laptop",
			
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
	</script>


	<!-- Script Files -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>