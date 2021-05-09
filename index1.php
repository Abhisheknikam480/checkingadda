<html>
	<head>
		<title>WELCOME</title>
		<!BOOTSTRAP>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<!Google Font>
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
		<style>
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
				background-color:#3edbf0;
				color:#fff;
				margin:5%;
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
				background:rgb(0,100,0);
				margin-top:15px;
				margin-left:-15px;
			}
			.menu ul li:hover .sub-menu ul{
				display:block;
				margin:10px;
			}
			.menu ul li:hover .sub-menu ul li{
				width:150px;
				padding:10px;
				border-bottom:1px dotted #fff;
				background:transparent;
				border-radius:0;
				text-align:left;
			}
			.menu ul li:hover .sub-menu ul li a:hover{
				color:#b2ff00;
			}
		</style>
	</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	<section id="main">
		<h1>INTEREST CALCULATOR</h1>
		<div class="head">
			<div class="mb-3">
			<form method="get" action="#">
				<label for="formGroupExampleInput" class="form-label">Interest Type</label>
				<select  name="itype" class="form-control" id="formGroupExampleInput2" required>
				<option>Simple Interest</option>
				<option>Compound Interest</option>
			</select>
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Principal Amount</label>
				<input type="text" name="amount" class="form-control" id="formGroupExampleInput2" placeholder="10,000">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Annual Rate</label>
				<input type="text" name="rate" class="form-control" id="formGroupExampleInput2" placeholder="10%">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Peroid Unit</label>
				<select  name="periodunit" class="form-control" id="formGroupExampleInput2" required>
				<option>Days</option>
				<option>Weeks</option>
				<option>Months</option>
				<option>Quarters</option>
				<option>Years</option>
			</select>
			</div>
			
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Peroid</label>
				<input type="text" name="period" class="form-control" id="formGroupExampleInput2">
			</div>
			<div class="submit">
				<center><button type="submit" name="submit" value="submit" class="btn btn-light btn-md download-buton ml-auto edit">SUBMIT</button></center>
			</div>
			</form>
		</div>
	</section>
	<section id="answer">
	<?php
				if(isset($_GET['submit']))
				{
					$itype=$_GET['itype'];
					$newitype=strtolower($itype);
					$amount=$_GET['amount'];
					$rate=$_GET['rate'];
					$periodunit=$_GET['periodunit'];
					$period=$_GET['period'];
					if($newitype=="simple interest")
					{
						if($periodunit=="Days")
						{
							$realperiod=$period/365;
							$answer=($amount*$rate*$realperiod)/100;
							$newanswer=round($answer,2);
							$total=$amount+$newanswer;
							echo "<h3>Interest Earned</h3> <h2 style='color:#3f3697;'>$newanswer</h2> <br><br>
							 <h3>Principal Amount</h3> <h2 style='color:#3f3697;'>$amount</h2> <br><br>
							 <h3>Total Value</h3> <h2 style='color:#3f3697;'>$total</h2>";
						}
						else if($periodunit=="Weeks")
						{
							$realperiod=$period/52;
							$answer=($amount*$rate*$realperiod)/100;
							$newanswer=round($answer,2);
							$total=$amount+$newanswer;
							echo "<h3>Interest Earned</h3> <h2 style='color:#3f3697;'>$newanswer</h2> <br><br>
							 <h3>Principal Amount</h3> <h2 style='color:#3f3697;'>$amount</h2> <br><br>
							 <h3>Total Value</h3> <h2 style='color:#3f3697;'>$total</h2>";
						}
						else if($periodunit=="Months")
						{
							$realperiod=$period/12;
							$answer=($amount*$rate*$realperiod)/100;
							$newanswer=round($answer,2);
							$total=$amount+$newanswer;
							echo "<h3>Interest Earned</h3> <h2 style='color:#3f3697;'>$newanswer</h2> <br><br>
							 <h3>Principal Amount</h3> <h2 style='color:#3f3697;'>$amount</h2> <br><br>
							 <h3>Total Value</h3> <h2 style='color:#3f3697;'>$total</h2>";
						}
						else if($periodunit=="Quarters")
						{
							$realperiod=$period/4;
							$answer=($amount*$rate*$realperiod)/100;
							$newanswer=round($answer,2);
							$total=$amount+$newanswer;
							echo "<h3>Interest Earned</h3> <h2 style='color:#3f3697;'>$newanswer</h2> <br><br>
							 <h3>Principal Amount</h3> <h2 style='color:#3f3697;'>$amount</h2> <br><br>
							 <h3>Total Value</h3> <h2 style='color:#3f3697;'>$total</h2>";
						}
						else
						{
							$realperiod=$period;
							$answer=($amount*$rate*$realperiod)/100;
							$newanswer=round($answer,2);
							$total=$amount+$newanswer;
							echo "<h3>Interest Earned</h3> <h2 style='color:#3f3697;'>$newanswer</h2> <br><br>
							 <h3>Principal Amount</h3> <h2 style='color:#3f3697;'>$amount</h2> <br><br>
							 <h3>Total Value</h3> <h2 style='color:#3f3697;'>$total</h2>";
						}
					}
					else
					{
						if($periodunit=="Days")
						{
							
								$t=$period/365;
								$answer=$amount*pow((1+$rate/100),$t);
								$newanswer=round($answer,2);
								$interest=$newanswer-$amount;
								echo"Interest Rate is $interest";
							
						}
						else if($periodunit=="Months")
						{
							
								$t=$period/12;
								$answer=$amount*(pow((1+$rate/100),$t));
								$newanswer=round($answer,2);
								$interest=$newanswer-$amount;
								echo"Interest Rate is $interest";
							
						}
						else if($periodunit=="Weeks")
						{
							
								$t=$period/52;
								$answer=$amount*(pow((1+$rate/100),$t));
								$newanswer=round($answer,2);
								$interest=$newanswer-$amount;
								echo"Interest Rate is $interest";
							
						}
						else if($periodunit=="Quarters")
						{
							
								$t=$period/4;
								$answer=$amount*(pow((1+$rate/100),$t));
								$newanswer=round($answer,2);
								$interest=$newanswer-$amount;
								echo"Interest Rate is $interest";
							
						}
						else if($periodunit=="Years")
						{
							
								$t=$period;
								$answer=$amount*(pow((1+$rate/100),$t));
								$newanswer=round($answer,2);
								$interest=$newanswer-$amount;
								echo"Interest Rate is $interest";
							
						}
					}
				}
	?>
	</section>
	<section id="calculator">
		<div class="title">
			<center><h1>BANK</h1></center>
		</div>
		<div class="row mar">
			
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-primary btn-lg sk" onclick="document.location='emilb.php'">EMI</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Loan Basic</p>
				</div>
		</div>	
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-primary btn-lg sk" onclick="document.location='fdtdr.php'">FD</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Fixed Deposit-TDR</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-primary btn-lg sk" onclick="document.location='fdstdr.php'">FD</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Fixed Deposit-STDR</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-primary btn-lg sk" onclick="document.location='rd.php'">RD</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Recurring Deposit</p>
				</div>
			
		</div>
		
		
		<div class="title2">
			<center><h1>BANK & POST OFFICE</h1></center>
		</div>
		<div class="row mar">
			
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-secondary btn-lg sk" onclick="document.location='ppf.php'">PPF</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Public Provident Fund</p>
				</div>
		</div>	
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-secondary btn-lg sk" onclick="document.location='ssa.php'">SSA</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Sukanya Samriddhi Account</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-secondary btn-lg sk" onclick="document.location='scss.php'">SCSS</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Senior Citizens Savings Scheme</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-secondary btn-lg sk" onclick="document.location='kvp.php'">KVP</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Kisan Vikas Patra</p>
				</div>
			
		</div>
		
		<div class="title3">
			<center><h1>POST OFFICE</h1></center>
		</div>
		<div class="row mar">
			
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-success btn-lg sk" onclick="document.location='mis.php'">MIS</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Monthly Income Scheme</p>
				</div>
		</div>	
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-success btn-lg sk" onclick="document.location='pord.php'">RD</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Recurring Deposit</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-success btn-lg sk" onclick="document.location='td.php'">TD</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Time Deposit</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-success btn-lg sk" onclick="document.location='nsc.php'">NSC</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>National Savings Certificate</p>
				</div>
			
		</div>
		
		<div class="title4">
			<center><h1>RETIREMENT</h1></center>
		</div>
		<div class="row mar">
			
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-danger btn-lg sk" onclick="document.location='nps.php'">NPS</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>National Pension Scheme</p>
				</div>
		</div>	
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-danger btn-lg sk" onclick="document.location='epf.php'">EPF</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Emplyees Provident Fund</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-danger btn-lg sk" onclick="document.location='aps.php'">APS</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Atal Pension Scheme</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-danger btn-lg sk" onclick="document.location='sym.php'">SYM</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>PM Shram Yogi Maan-dhan</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-danger btn-lg sk" onclick="document.location='vvs.php'">VVS</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>PM Vaya Vandhana Scheme</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-danger btn-lg sk" onclick="document.location='grt.php'">GRT</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Gratuity Scheme</p>
				</div>
			
		</div>
		
		<div class="title5">
			<center><h1>BOND</h1></center>
		</div>
		<div class="row mar">
			
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-warning btn-lg sk" onclick="document.location='frsb.php'">FRSB</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Floating Rate Savings Bonds</p>
				</div>
		</div>	
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-warning btn-lg sk" onclick="document.location='sgbs.php'">SGBS</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>Sovereign Gold Bond Scheme</p>
				</div>
			
		</div>
		<div class="row mar">
				<div class="col-lg-2 col-sm-2">
					<button type="button" class="btn btn-warning btn-lg sk" onclick="document.location='ec54.php'">54EC</button>
				</div>
				<div class="col-lg-10 col-sm-10">
					<p>54EC Bonds </p>
				</div>
			
		</div>
		
	</section>
</body>
</html>