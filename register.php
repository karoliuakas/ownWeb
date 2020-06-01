<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <?php
  include 'templates/head.php';
  ?>
</head>

<body>
    <div class="container">
        
            

            <div class="" id="right">
                <img src="img/registerlogo.png" alt="icon" width="150
                px" id="loginlogo">
                <h1>Naujo vartotojo registracija</h1>
                <form class="myform" action="includes/signup.inc.php" method="POST">
                    <input type="text" class="inputvalues" name="uid" placeholder="Slapyvardis" /><br>
                    <input type="email" class="inputvalues" name="mail" pattern="[^ @]*@[^ @]*" placeholder="El. paštas">
                    <input type="password" class="inputvalues" name="pwd" placeholder="Slaptažodis" /><br>
                    <input type="password" class="inputvalues" name="pwd-repeat" placeholder="Pakartokite slaptažodį" /><br>
                    <input type="Submit" id="loginbutton" value="Registruotis" name="signup-submit" />
                    <br>
                    <h2>Jau užsiregistravęs? <a href="login.php">Prisijunk</a></h2>
                   <!-- <input type="button" id="registerbutton" value="Registruotis" /> -->
                </form>
            </div>

      



    </div>

    <?php
   include 'templates/footer.php';
   ?>
</body>

</html>