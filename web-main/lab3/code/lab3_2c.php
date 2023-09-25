<?php
session_start();

function redirect(){
    header('Location: /');
    exit();
}

if (isset($_POST))
{
    $mas = [["Name", $_POST["Name"]],["Money", $_POST["Your_Cash"]],
        ["Age", $_POST["Age"]], ["Work_Area", $_POST["Work_Area"]]];
    $_SESSION["Info"] = $mas;
    redirect();
}
