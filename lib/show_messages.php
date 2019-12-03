<?php
function ShowMessages()
{
    //je moet eerst je <head> printen voor de messages worden getoond
    if ( ! $_SESSION["head_printed"] ) BasicHead();

    //weergeven messages
    if ( count($_SESSION["msg"]) > 0 )
    {
        foreach( $_SESSION["msg"] as $message )
        {
            $row = array( "message" => $message );
            $templ = LoadTemplate("messages");
            print ReplaceContentOneRow( $row, $templ );
        }

        //unset maakt de variabele leeg
        unset($_SESSION['msg']);
    }
}