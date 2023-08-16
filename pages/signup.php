<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="css/styleok.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/signup.css">
</head>
<body>
<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

<div class="body">
		<div class="veen">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Don't have an account?</p>
                
				<button>Register</button>
                
                
			</div>
			<div class="wrapper">
				<form id="login" tabindex="500">
					<h3>Login</h3>
					<div class="mail">
						<input type="mail" name="">
						<label>Mail or Username</label>
					</div>
					<div class="passwd">
						<input type="password" name="">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Login</button>
					</div>
                    <div class="social">
                    <p>Login by</p>
                    <button><i class="fab fa-brands fa-google"></i></button>
                    <button><i class="fab fa-brands fa-facebook-f"></i></button>
                </div>
				</form>
				<form id="register" tabindex="502">
					<h3>Register</h3>
					<div class="name">
						<input type="text" name="">
						<label>Full Name</label>
					</div>
					<div class="mail">
						<input type="mail" name="">
						<label>Mail</label>
					</div>
					<div class="uid">
						<input type="text" name="">
						<label>User Name</label>
					</div>
					<div class="passwd">
						<input type="password" name="">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Register</button>
					</div>
                    <div class="social">
                    <p>Register by</p>
                    <button><i class="fab fa-brands fa-google"></i></button>
                    <button><i class="fab fa-brands fa-facebook-f"></i></button>
                </div>
				</form>
			</div>
		</div>	
	</div>


	<style type="text/css">
		.site-link{
      padding: 5px 15px;
			position: fixed;
			z-index: 99999;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			right: 30px;
			bottom: 30px;
			border-radius: 10px;
		}
		.site-link img{
			width: 30px;
			height: 30px;
		}
	</style>
    <script src="../assets/js/signup.js"></script>
</body>
</html>