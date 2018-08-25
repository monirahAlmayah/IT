<?php 
require "../connect.php";



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<span> Welcom </span>
			</div>
			<div class="col-md-6">
				<a href="#">Logout</a>
               
			</div>
		</div>
	</div>
</header>
<section>
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 ">
				<ul class="nav nav-navbar flex-column">
					
					<li><a href="profile.php"><i class="fas fa-address-card"></i></a></li>
					<li><a href="add.php"><i class="fas fa-plus"></i></a></li>
					<li><a href="requests.php"><i class="fas fa-folder-open"></i></a></li>
				</ul>
			</nav>
			<div class="col-md-8">
				
					
				<form class="forms">
					<input type="text" name="userid" class="form-control" placeholder="Enter your ID jOB ">
					<input type="text" name=name" class="form-control" placeholder="Full name">
					<input type="password" name="pass" class="form-control" placeholder="Password">
					<input type="text" name="phone" class="form-control" placeholder="Phone">
					<input type="text" name="address" class="form-control" placeholder="Address">
					<input type="text" name="depr" class="form-control" placeholder="Department">
					<select class="form-control">
						 <?php
                          $sql="SELECT * FROM  role";
                          $res=mysqli_query($con,$sql);
                          while ($row=mysqli_fetch_array($res)) {
                          	echo '
                             <option>'.$row['role'].'</option>

                          	';
                          }

						?>
					</select>
					<input type="submit" name="sub" class="btn  btn-info" value="send">
				</form>
			</div>
		</div>
	</div>
</section>
<footer>
   
    </footer>
</body>
</html>