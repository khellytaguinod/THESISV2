<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
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

<div class="container-fluid header">
	<div class="row">
		<div class="col nav-link">
		 link heres
		</div>
	</div>
	<div class="row  searchbar">
		<div class="col-md-2">
			 <a href="index.php"><img src="img/logos/logo1.png" id="logoMain"><span></span></a>
	    </div>
	    <div class="col-md-8">
	    	 <br>
		      <form class="navbar-form" form action="index_result.php" method="POST" role="search">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..." name="search" required>
                  <div class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
              </div>	
          </form>
	    </div>
	    <div class="col-md-2">
	   <button onclick="location.href='user_product/product_setting/productAdd.php'" type="button" id="sellButton">Sell in iMarket</button>
	    </div>
	</div>
</div>
</body>
</html>