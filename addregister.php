<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<!-- css files -->
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- main -->
<div class="center-container">
	<!--header-->
	<div class="header-w3l">
		<h1>Online Register</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
				<h2>Register</h2>
			</div>
			<form action="add.php" method="post">
				<div class="pom-agile">
					<input placeholder="E-mail" name="username" class="user" type="email" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<div class="pom-agile">
					<input  placeholder="Password" name="password" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				</div>
                <div class="pom-agile">
					<input  placeholder="Password Confirm" name="ktra" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				</div>
				<div class="sub-w3l">
					<div class="right-w3l">
						<input type="submit" name="submit" value="submit">
					</div>
				</div>
			</form>
            <?php
    ?>
		</div>
	</div>
	<!--//main-->
</div>
</body>
</html>