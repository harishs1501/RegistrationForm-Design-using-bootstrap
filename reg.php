<!DOCTYPE html>
<html>
<head>
	<title>Registration from</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:lightblue">

<div class="container">
<div class="row">
	<div class="col-3"></div>
	<div class="col-6"  style="background-color:lightgrey">
		<h1 align="center">Registration Form</h1>
		<form method="POST" action="">
			<div class="form-group">
				<label class="form-label">Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label class="form-label">Father's Name</label>
				<input type="text" class="form-control" name="fna" id="fna" placeholder="Enter Your Father's Name">
			</div>
			<div class="form-group">
				<label class="form-label">Gender : </label>
				<input type="radio" class="form-control-check"  name="Gender" value="Male">Male
				<input type="radio" class="form-control-check"  name="Gender" value="Female">Female
				<input type="radio" class="form-control-check"  name="Gender" value="Others">Others
			</div>
			<div class="form-group">
				<label class="form-label">DOB</label>
				<input type="text" class="form-control" name="dob" id="dob" placeholder="DD/MM/YYYY">
			</div>
			<div class="form-group">
				<label class="form-label">Phone no</label>
				<input type="text" class="form-control" name="phn" id="phn" placeholder="Enter Your Phone no">
			</div>
			<div class="form-group">
				<label class="form-label">Address</label>
				<textarea class="form-control" rows="5" name="addr" id="addr"></textarea>
			</div>
			<div class="form-group">
				<label class="form-label">Email</label>
				<input type="email" class="form-control" name="em" id="em" placeholder="Enter Your Email ID">
			</div>
			<div class="form-group">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="psd" id="psd" placeholder="Enter password">
			</div>
			<div class="form-group">
				<label class="form-label">Confirm Password</label>
				<input type="password" class="form-control" name="cpsd" id="cpsd" placeholder="Re-enter your password">
			</div>
			<div class="form-group">
				<input type="reset" name="Reset" class="btn btn-danger">
				<input type="submit" name="submit" class="btn btn-success">
			</div>

		</form>
	</div>
	<div class="col-3"></div>
</div>
</div>
</body>
</html>