<?php
require_once('header.php');
require_once('connection.php');

if(isset($_GET['logout'])) {
	session_destroy();
	header("location: login.php"); 
}

if(isset($_POST['login'])) {
		$mail=mysqli_real_escape_string($conn, $_POST['username']);
		$pwd=mysqli_real_escape_string($conn, $_POST['password']);
		//$pwd=md5($pwd);		
		$result=mysqli_query($conn, "SELECT * FROM employee WHERE `user_id`='$mail' && password='$pwd' && role_id='1'");		
		$rowcount=mysqli_num_rows($result);
		
		if($rowcount==true)
		{
			$row=mysqli_fetch_assoc($result);
			$_SESSION['user']=$row['name'];
			$_SESSION['user_id']=$row['id'];
			header("location: add-blog.php"); 
			exit;
		} else {
			$_SESSION['invalidlogindetails']="**Incorrect login details";
			header("location:login.php"); 
			exit;	  		
		}

} else {
?>

<section id="main-section" class="clearfix">
	<div class="container-fluid pt-5">
	
<!-- Body Section -->
<section id="why-us" class="why-us">
	<div class="container-fluid">
		<div class="row col-sm-12">
			<?php
				if(isset($_SESSION['invalidlogindetails'])) 
				{ 
					echo "<div class='alert alert-danger'><strong>".$_SESSION['invalidlogindetails']."</strong> !";
					echo "<button class='close' data-dismiss='alert'>&times;</button></div>";
					unset($_SESSION['invalidlogindetails']);
				}
			?>
		</div>
	
		<div class="row">
			<div class="card-chart p-5 mx-auto" data-aos="slide-down">
				<form action="login.php" method="post">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Username</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
					</div>
					<button type="submit" name="login" class="btn btn-dark btn-block">Submit</button>
				</form>
			</div>
		</div>

	</div>
	
</section>
<!-- End Body Section -->

 </div>
</section> 
<?php
	require_once('footer.php');
	}
?>
