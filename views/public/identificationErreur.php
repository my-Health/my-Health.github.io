<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connection</title>
    <link rel="icon" href="../../image/lo-go.png"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <link href="../../css/identification.css" rel="stylesheet" type="text/css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("Include/header.php") ?>
	<?php 
            if ($_SESSION['login'] == 'logged') include("../utilisateur/Include/nav-perso.php");
            else include("Include/nav-public.php");
    ?>

        <article>
           <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="../../image/user_placeholder.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="authentification.php" method="post">
                <span id="reauth-email" class="reauth-email"></span>
				<p class="control-label alert alert-danger">Email or password incorrect.</p>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="User Name" required autofocus/>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required/>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me">Remember Me!
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Let's Go!</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot your password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
        </article>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
        </footer>
</body>
</html>
