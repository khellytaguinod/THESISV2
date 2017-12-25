<!DOCTYPE html>
<html>

<head>
    <title>Sign In iMARKET</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
</head>

<body>
<div class="container-fluid">
    <div class="d-flex justify-content-center logIn">
        <img src="img/logos/favIcon.png" class="img-fluid" id="iMARKET-icon" alt="logo">
    </div>
    <div class="d-flex justify-content-center">
        <div class="logInBox">
            <br>
            <h3 class="text-center">Sign In iMARKET</h3>
            <br>
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button class="button" id="sign-in-button" name="submit" type="submit">
                    Sign In!
                </button>
                <br>
                <a href="forgotPassword.php">Forgot password?</a>
                <br>
                <small id="accountHelp" class="form-text text-muted text-center"> OR</small>
                <br>
                <button onclick="location.href='signUp.php'" type="button" id="register-button">
                    Sign Up For iMarket
                </button>
            </form>
            <br>
        </div>
    </div>
</div>
</body>

</html>
