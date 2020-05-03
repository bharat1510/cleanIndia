<?php 
	$usr = $_GET['usr'];
	$lat = $_GET['lat'];
	$long = $_GET['lon']; ?>
<html>
<head><title>Clean India</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	<link rel="stylesheet" href="css/main.css" type="text/css">
	
	<link rel="stylesheet" href="css/header.css" type="text/css">
		
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
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<?php 
					if(isset($_GET['usr'])) {
						echo '<li><a href="login/logout.php"><button class="btn btn-warning btn-md">Logout</button></a></li>';
						echo '<li><p>Welcome, '.$_GET['usr'].'</p></li>';
					} 
					else {
						echo '<li><a href="login/login.php"><button class="btn btn-warning btn-md">Login</button></a></li>';
					}
					?>
				</ul>
                </div>
            </nav>
        </header>
<div class="bharat">
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="bg-danger" style="text-align:center">Help to Make India Clean </h1>
				<p>&emsp;&emsp;Click a Picture/Video of overflow dustbin,garbage, wasting water, polluted water etc and upload those to help make India Clean.
You can upload a picture in format with maximum 5MB and video in format with maximum 100MB.</p>
				<br><br>
				<form action="store-image.php?usr=<?php echo $usr;?>&lat=<?php echo $lat;?>&long=<?php echo $long; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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