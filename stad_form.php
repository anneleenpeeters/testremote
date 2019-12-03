<?php
require_once "lib/autoload.php";

BasicHead(); // --> view_functions.php + basic_head.html
?>
<body>

<div class="jumbotron text-center">
    <h1>Formulier Stad</h1>
</div>

<div class="container">
    <div class="row">

        <?php
        echo $_GET["saveOK"];

        $data = GetData("select * from images where img_id=" . $_GET['id'] ); // --> pdo.php
        $template = LoadTemplate("stad_form"); // --> view_functions.php + basic_head.html
        print ReplaceContent( $data, $template); // --> view_functions.php
        ?>

    </div>
</div>

</body>
</html>