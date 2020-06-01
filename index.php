<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="css/pagrindinis.css">
<?php
  include 'templates/head.php';
  ?>

</head>

<body>
    <?php
    include 'templates/navbar.php';
    ?>
    <div class="container" id="first">
        <div class="row">
            <div class="col-lg-8" id="firstL">
                <p>
                    Sveiki, esu KAROLIS ŽILEVIČIUS ir šiuo metu studijuoju Vilniaus kolegijoje programų sistemas. Esu jaunesnysis programuotojas / IT specialistas besidomintis viskuo kas susiję su kompiuteriais tiek iš techninės, tiek iš programinės pusės. Nuo pat vaikystės
                    pradėjau domėtis kompiuteriu, jo programomis ir žaidimais. Todėl šiuo metu didžiąją laiko dalį skiriu šiom veiklom. Laisvalaikiu žaidžiu krepšinį mėgėjų lygoje ir šoku liaudiškus šokius. <br> <br> <b><u>Įgyta patirtis
                    ir žinios mokantis:</u></b>
                </p>
                <ul id="ProgramuSarasas">
                    <li>C#</li>
                    <li>C++</li>
                    <li>Ruby</li>
                    <li>MySQL</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JS</li>
                    <li>PHP</li>
                    <li>AutoCad</li>
                    <li>PhotoShop</li>
                    <li>CorelDraw</li>
                    <li>Premiere</li>

                </ul>
            </div>

            <div class="col">
                <img src="img/transparentB&W.png" class="img-fluid float-right" alt="Responsive image" id="nuotrauka">
            </div>

        </div>

    </div>
   <?php
   include 'templates/footer.php';
   ?>
</body>

</html>