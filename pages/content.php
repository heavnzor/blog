<?php
$page = $_GET['page'];



switch($page)
{
case "actualite":
    include 'actualite.php'; 
break;

case "projets":
    include 'projets.php' ;
break;
default:
include 'actualite.php';


}

?>