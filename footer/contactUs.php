<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
</head>

<body>

<?php include '../header.php' ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="page-header">Contact Us</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <form>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Full Name</label>
                    <input type="text" class="form-control" placeholder="Write your Name">
                </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" placeholder="name@example.com">
                </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" rows="5" placeholder="Ask us anything you want to know"></textarea>
                </div>
                  <button type="submit" class="btn btn-primary">Send</button>
                  <button type="reset" class="btn">Clear</button>
            </form> 
        </div>
        <div class="col-sm">
           <br>
           <iframe 
           width="100%" 
           height="270px" 
           frameborder="0" 
           scrolling="no" 
           marginheight="0" 
           marginwidth="0" 
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.8306954511957!2d121.01845665817463!3d14.561345997456918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDMzJzQwLjkiTiAxMjHCsDAxJzEwLjQiRQ!5e0!3m2!1sen!2sph!4v1481111170468">
           </iframe>
             <dt class="col">Address</dt>
             <dd class="col">324 Se. Gil Puyat AvenueBel-air, Makati City</dd>
             <dt class="col">Telephone</dt>
             <dd class="col">09167737988</dd>
             <dt class="col">Email</dt>
             <dd class="col"><a href="mailto:imarketbns.team@gmail.com">imarketbns.team@gmail.com</a></dd>
        </div>
    </div>
</div>
<br>
<?php include '../footer.php' ?>
</body>

</html>
