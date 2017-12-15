<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  	<div class = "container">
	<div class="wrapper">
		<form method="post" name="login" action="cek_login.php"class="form-signin">       
		    <h3 class="form-signin-heading">LOGIN</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="username" placeholder="username" required="" autofocus="" />
			  <input type="password" class="form-control" name="password" placeholder="password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="submit">Login</button>
			  <h5 class="login"><a href="daftar_user.php">Create account</a> or <a href="#">Reset password</a></h5>  			
		</form>			
	</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>