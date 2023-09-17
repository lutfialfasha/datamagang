<html>
<head>
<?php include "config/db_config.php";?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<title>Login & Logout PHP</title>
</head>
<body>
	<div class="container">

		<div class="row">
	    <div class="col-md-4 offset-md-4">

		<div class="card mt-5">
		<div class="card-title text-center">
		<h1>Login Form</h1>
		</div>
		<div class="card-body">
		<form action="login/logindb.php" method="post">
		<div class="form-group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username">

		</div>
		<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control" id="password" placeholder="Password">
		</div>

        <br>

		<button type="submit" class="btn btn-primary">Submit</button>
	    </form>

		</div>
		</div>
		</div>

		</div>

	    </div>
</body>
<?php include 'layouts/footer.php'; ?>