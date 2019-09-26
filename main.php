 <!-- Must have to login first code -->
<?php  /*
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login/index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login/index.php");
	} */
		$lat = $_GET["lat"];
		$lon = $_GET["lon"];
		include_once('mysqlconnect.php');
		
		$query = "INSERT INTO location (letitude,longitude) VALUES('$lat', '$lon')";
			mysqli_query($conn, $query);

?>

<html>
<head><title>Clean India</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	<link rel="stylesheet" href="main.css" type="text/css">
	
	<link rel="stylesheet" href="header.css" type="text/css">
		
	<!-- Special Font & Symbol -->	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	
</head>
<body>
	<header><br>
            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>

                <div class="logo">
                     Clean India
                </div>

                <div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="main.php">Add Photo/Video</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="login/index.php"><button class="btn btn-success btn-md">Login</button></a></li>
				</ul>
                </div>
            </nav>
        </header>
<div class="bharat">
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="bg-danger">Help to Make India Clean <h1>
				<h3>&emsp;&emsp;Click a Picture/Video of overflow dustbin,garbage, wasting water, polluted water etc and upload those to help make India Clean.
You can upload a picture in format with maximum 5MB and video in format with maximum 100MB.</h3>
				<br><br>
				<form action="img.php?latitude=<?php echo $lat;?>&longitude=<?php echo $long; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
				<div class="form-group">
					<label for="fileup" class="col-sm-2 control-lebal">Image </label>
					<div class="col-sm-10">
						<input type="file" name="file" id="fileup" /><div id="output"></div>
				
					</div>
				</div><br>
				<!--<div class="form-group">
					<div class="col-sm-10 col-sm-push-2">
						<button onClick="button()">Location</button>
					</div>
				</div><br>-->
				<div class="form-group">
					<div class="col-sm-10 col-sm-push-2">
						<input type="submit" id="submit" name="submit" class="btn btn-success" value="Submit"/>
					</div>
				</div>
				</form>
				
			</div>
		</div>
	</div>	
</div>

	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
		
	</script>
	<script src="js/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>