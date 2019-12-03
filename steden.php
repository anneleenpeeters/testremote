<?php
require_once "lib/autoload.php";

BasicHead(); //--> view_functions.php + basic_head.html
ShowMessages(); //--> show_message.php
?>
<body>

<div class="jumbotron text-center">
    <h1>Leuke plekken in Europa</h1>
    <p>Tips voor citytrips voor vrolijke vakantiegangers!</p>
</div>

<?php

PrintNavBar();  //--> view_functions.php + navbar.html + navbar_item.html

?>

<div class="container">
    <div class="row">

        <?php
        $data = GetData("select * from images"); // --> pdo.php
        $template = LoadTemplate("steden"); // --> view_functions.php + steden.html
        print ReplaceContent( $data, $template); // --> view_functions.php
        ?>

    </div>
</div>

</body>
</html>