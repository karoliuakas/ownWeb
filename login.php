<?php

?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php
  include 'templates/head.php';
  ?>
  
</head>

<body>
 <a href="index.php">
<img src="img/WebLogo.png" class="center-block" alt="WebLogo" href="index.php" >
</a>

    <div class="container">
        <div class="row">
            <div class="col-lg-8" id="left">
                <img src="img/loginlogo.png" class="img-fluid" alt="Responsive image" id="LoginIMG"
                    width="540px">
            </div>
            

            <div class="col-lg-4" id="right">
                <img src="img/loginlogoicon.png" alt="icon" width="100px" id="loginlogo">
                <h1>Vartotojo prisijungimas</h1>
                <form class="myform" action="includes/login.inc.php" method="post">
                    <input type="text" class="inputvalues" name="username" placeholder="Slapyvardis" /><br>
                    <input type="password" class="inputvalues" name="password" placeholder="Slaptažodis" /><br>
                    <input type="Submit" id="loginbutton" name="login-submit" value="Prisijungti" />
                    <br>
                    <h2>Neturite paskyros? <a href="register.php">Registruokis</a></h2>
                   <!-- <input type="button" id="registerbutton" value="Registruotis" /> -->
                </form>
            </div>

        </div>



    </div>

    <?php
   include 'templates/footer.php';
   ?>
</body>

</html>