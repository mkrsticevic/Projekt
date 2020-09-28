<?php
if (isset($_GET["id"])) {
    require ('baza.php');
    $id=$_GET["id"];
    session_start();
    // echo($adresa);
    $sql="UPDATE narudzba as n  set dostavljeno=1 WHERE n.id=$id";;
    $result = $con->query($sql);
    unset($_SESSION["idKorpe"]);
    header("Location: svenarudzbe.php");
}
?>