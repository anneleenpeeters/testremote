<?php
$login_form = true;
require_once "lib/autoload.php";

//redirect naar homepage als de gebruiker al ingelogd is
//isset test of die variabele bestaat en wat dat inhoud
//exit wil stoppen zeggen
if ( isset($_SESSION['usr']) )
    {
        //berichten die boven aan de pagina (rode balk) worden vermeld
        //de andere berichten staan bij logout.php
        //show_messages.php + messages.html
        $_SESSION["msg"][] = "U bent al ingelogd!";
        header("Location: /wdev_anneleen/oef62/steden.php");
        exit;
    }

BasicHead();
ShowMessages();
?>
<body>

<div class="jumbotron text-center">
    <h1>Login</h1>
</div>

<div class="container">
    <div class="row">

        <?php
        print LoadTemplate("login"); // --> view_functions.php + login.html
        ?>

    </div>
</div>

</body>
</html>