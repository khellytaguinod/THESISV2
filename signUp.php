<!DOCTYPE html>
<html>
<head>
	<title>Sign Up for iMARKET</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  	<!-- Bootstrap CSS -->
	<!--   	font awesome icons cdn-->
	 <script src="https://use.fontawesome.com/5807772a03.js"></script>
	<!--   	font awesome icons cdn-->
</head>
<body>
	  	 <br>
  <div class="container">
	  	<div class="row justify-content-md-center">
		    <div class="col-4 d-none d-sm-block">
		      <h3>Why use iMARKET?</h3>
		      <br>
		      <p>We build this site to help support <b>game changers!</b> entrepreneurs</p>
		      <br>
		      <p>Post your works and sell them to outside world!</p>
		      <br>
		      <p>Sell the products you don't use anymore</p>
		      <br>
		      <p>Find the products you want to buy</p>
		      <br>
		      <p>Show our school pride!</p>
		    </div>
		    <div class="col-md-4 col-sm-10">
		      <h2>Join the iMARKET today</h2>
		      <p> If you already have account<a href="login.php"> LogIn Here</a></p>
		       <small id="Help" class="form-text text-muted">All fields required<medium style="color: red;">*</medium></small>	
		      <form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4" class="col-form-label">Hello! Let's get started</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4" class="col-form-label d-none d-sm-block">&nbsp</label>
				      <input type="password" class="form-control" id="inputPassword4" placeholder="Last Name">
				    </div>
				    <div class="form-group col-md-6">
				       <label for="inputEmail4" class="col-form-label">Email address</label>
				       <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Email">
				    </div>
				     <div class="form-group col-md-6">
				       <label for="inputEmail4" class="col-form-label d-none d-sm-block">&nbsp</label>
				       <input type="email" class="form-control" value="@iacademy.edu.ph" id="inputEmail4" disabled>	
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="inputAddress" class="col-form-label">Password</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="Enter Password">
				  </div>
				  <div class="form-group">
				    <label for="inputAddress" class="col-form-label">Contact Number</label>
				    <input type="number" class="form-control" id="inputAddress" value="09"  placeholder="09">
				  </div>
				  <div class="form-group">
                     <label for="bday">Date of Birth </label> <br>
                     <input type="date" name="birthDate" class="form-control" max="31-12-2020" required>
                  </div>
                  <div class="form-group">
              	    <h4>Oh! One more thing </h4>
                    <small id="Help" class="form-text text-muted">Are you a:</small> <br>

                    <div class="form-group">
                      <label><input id="studentType" type="radio" name="userType" value="student" onchange="studentChange()"	 required>Student</label> <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                      <label><input id="watch-you" type="radio" name="userType" value="employee" onchange="employeeChange()" required>Employee</label> <i class="fa fa-suitcase" aria-hidden="true"></i>
                    </div>
                  </div>
			  </form>

	          <div id='hidden-stu' style='display:none;'>
	           	helloe working yas
	          </div>

	          <div id='hidden-emp' style='display:none;'>
	           	helloe working whohoo!
	          </div>

			                           <br><br><br><br><br><br><br><br>

		    </div> <!-- end of col-md-4 col-sm-10 -->
	  </div> <!-- end of row justify-content-md-center -->
  </div>
  <div class="container-fluid" style="background-color: #15224F">
  	 <?php include 'footer.php'; ?>
  </div>
  
<script>
// document.getElementById("studentType").addEventListener("change", myFunction);

function studentChange() {
   	document.getElementById("hidden-stu").style.display = "block";
}

function employeeChange() {
   	document.getElementById("hidden-emp").style.display = "block";
}
</script>

</body>
</html>