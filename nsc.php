<html>
	<head>
		<title>WELCOME</title>
		<!ICONS>
		<script src="https://kit.fontawesome.com/8f015284da.js" crossorigin="anonymous"></script>
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
		
		<!BOOTSTRAP>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
		
		<!Google Font>
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
		<style>
			body{
				background-image:url("background.jpg");
				
			}
			.menu{
				font-size:1em;
				padding-left:25px;
				color:black;
			}
			#main{
				margin:10%;
			}
			.head{
				background-color:#e1f1dd;
			}
			.edit{
				margin:1%;
			}
			#answer{
				margin:10%;
			}
			.title{
				font-family: 'Raleway', sans-serif;
				font-size:1.5em;
			}
			.brand{
				font-family: 'Raleway', sans-serif;
				font-size:2em;
			}
			.sty{
				margin:5%;
			}
			.options a{
				text-decoration:none;
				color:#000;
				font-family: 'Raleway', sans-serif;
				font-size:1.5em;
			}
			.back{
				background-color:#dbf6e9;
			}
			p{
				font-family: 'Raleway', sans-serif;
				font-size:2.5em;
			}
			.mar{
				box-shadow: 5px 5px 8px 10px #888888;
				margin:2% 10% 2% 10%;
				background-color:#c8eed9;
			}
			.sk{
				margin:3%;
				
			}
			.title2{
				background-color:#3c415c;
				color:#fff;
				margin:5%;
			}
			.title3{
				background-color:green;
				color:#fff;
				margin:5%;
			}
			.title4{
				background-color:#e84545;
				color:#fff;
				margin:5%;
			}
			.title5{
				background-color:#ffc93c;
				color:#fff;
				margin:5%;
			}
			.sub-menu{
				display:none;
			}
			.menu ul li:hover .sub-menu{
				display:block;
				position:absolute;
			}
			.menu ul li:hover .sub-menu ul{
				display:block;
			}
			.menu ul li:hover .sub-menu ul li{
				border-bottom:1px dotted #fff;
				background:transparent;
				border-radius:0;
				text-align:left;
			}
			.menu ul li:hover .sub-menu ul li a:hover{
				color:#b2ff00;
			}
			#footer{
			padding:50px;
			background-color: #000;
			color:#fff;
		}
		
		.red{
			color:red;
		}
		</style>
	</head>
<body>

	<section id="varti">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid title">
    <a class="navbar-brand brand" href="#">CHECKING ADDA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
		<li class="nav-item">
			 <a class="nav-link" href="#">HOME</a>
		</li>
		<li class="nav-item">
			 <a class="nav-link" href="index.php">FINANCE CALCULATOR</a>
		</li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            OTHER CALCULATOR
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php">FINANCE CALCULATOR</a></li>
            <li><a class="dropdown-item" href="#">FITNESS AND HEALTH CALCULATOR</a></li>
            <li><a class="dropdown-item" href="#">MATH CALCULATOR</a></li>
			<li><a class="dropdown-item" href="#">DATE AND TIME CALCULATOR</a></li>
			<li><a class="dropdown-item" href="#">ALL CALCULATOR</a></li>
          </ul>
		  <li class="nav-item">
			 <a class="nav-link" href="#">ABOUT US</a>
		</li>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>
	<section id="main">
		<div class="title">
			<center><h1>National Savings Certificate</h1></center>
		</div>
		<div class="head">
			<form method="get" action="#">
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Deposit Amount:</label>
				<input type="text" name="deposit_amount" class="form-control" id="formGroupExampleInput2" placeholder="Rs.">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Annual Interest Rate:</label>
				<input type="text" name="anr" class="form-control" id="formGroupExampleInput2" placeholder="6.80% currently">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Period:</label>
				<input type="text" name="period" class="form-control" id="formGroupExampleInput2" placeholder="5 Years" disabled>
			</div>
			
			<div class="submit">
				<center><button type="submit" name="submit" value="submit" class="btn btn-light btn-md download-buton ml-auto edit">SUBMIT</button></center>
			</div>
			</form>
		</div>
	</section>
	<section id="uttar">
	<?php
		if(isset($_GET['submit']))
		{
			$deposit_amount=$_GET['deposit_amount'];	
			
		}
	?>
	</section>
	<section id="footer">
		<div class="text-center center-block">
            <br />
				<h2>CLICK ON THE ICON BELOW TO CONTACT ME.</h2>
				<a class="red" href="mailto:rutukeshwaykar@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
				<h2>FOLLOW MY INSTAGRAM ID BELOW.</h2>
	            <a class="red" href="https://www.instagram.com/rutukeshganesh/"><i id="social-tw" class="fab fa-instagram-square fa-3x social"></i></a><br><br>
				copyright @rutukesh_waykar
		</div>
	</section>
</body>
</html>