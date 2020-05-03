<?php
	include('dbconnect.php');
	
	if(isset($_POST['signup'])) {
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$pass1=$_POST['pass1'];
		if($pass!=$pass1) {
			header("Location:./signup.php?sent=false");
		}
		else {
			$str = $email;
			$str1=substr($str,0,3);
			$str2= mt_rand(10,99);
			$username=($str1.$str2);
			$query = "INSERT INTO users (Email,Username,Password) VALUES ('$email', '$username', '$pass')";
			mysqli_query($conn,$query);
			header("location:./login.php?username=$username");
		}
	}
	else {
		if(isset($_POST['login'])) {
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		$query="SELECT * FROM users WHERE Username='$username' and Password='$pass'";
		$result=mysqli_query($conn,$query);
		$row=mysqli_num_rows($result);
		if($row) {
			$data=mysqli_fetch_assoc($result);
			if($data){
				session_start();
				$_SESSION['username']=$data['Username'];
				$_SESSION['email']=$data['Email'];

				header("location:../index.php?username=$username");
			}
			
		}
		else {
			header("Location:./login.php?sent=wrong");	
		}
		}
	}



?>