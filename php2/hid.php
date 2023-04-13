<?php
$title = "Скрытая";
$page_title = "Главная Скрытая";
$content = file_get_contents("components/FormHid.php");

session_start();
if($_SESSION == null)
{
    header('Location: reg.php');
}

require("components/layout.php")
?>