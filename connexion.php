<?php
try
{
// connection a la base de donne 
    $cn= new PDO("mysql:host=localhost;dbname=loin;charset=utf8","root","") ;
}
catch(Exception $e)
{
    echo " erreur de connection".$e->getMessage();
}

?>