<?php 
require "connect.php";
if (isset($_POST['sub'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$sql="SELECT * FROM user WHERE user_id='$user' AND password='$pass'";
	$resu=mysqli_query($con,$sql);
	if (mysqli_num_rows($resu)==1){
       header("location:user/index.php");
	}
	else{
		echo "string";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
	<div class="container">
		<div class="col-md-6 img">
			<img src="psu.png">
		</div>
	</div>
</header>
<section>
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 logfor">
				<img src="user3.png" width="200px" height="40px" class="img-responsive imo">
				<div class="panel panel-default">
					<div class="panel-heading">
						<form method="POST">
							<div class="form-group">
								<label for="user">username</label>

							       <!--<input type="text" name="user" class="form-control " id="user" ><div>
							       	<i class="glyphicon glyphicon-user"></i>
							       </div>-->

							       <div class="input-group">
                                      <div class="input-group-addon">
                                         <i class="glyphicon glyphicon-user"></i>
                                      </div>
                                      <input type="text" name="user" class="form-control " id="user" >
                                     </div>
								
							</div>

							<div class="form-group">
								<label for="pass">password</label>
							
								
									<!--<input type="password" name="pass" class="form-control" id="pass"><i class="fa fa-lock"></i>-->

									  <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                      </div>
                                     <input type="password" name="pass" class="form-control" id="pass">
                                     </div>
								
							</div>

							<div class="form-group">
							
							
								<input type="submit" name="sub" class="btn btn-info" value="Login" >

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer>
    <div class="wrapper">
       <!-- <h4 >Developer by: </h4>
        <ul>
            <li>Monirah Almayah & Salma Alotaibi </li>
            <li><a href="#">About Us</a></li>
        </ul>
        <h4 >@2018 </h4>
        <h4 >version:Beta </h4>-->
        <div>
        Developer by:
        
        </div>
        <div>
        <ul>
             <li>Monirah Almayah & Salma Alotaibi <a href="#"> - About us </a>
        </li>    
            
        </ul>
            <h6>@2018</h6>
        <span>version:</span> <p>Beta</p>
        </div>
        
        
    </div>
    </footer>
</body>
</html>