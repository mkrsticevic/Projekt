<?php
    if (isset($_POST["adresa"])) {
        require ('baza.php');

        session_start();
        $adresa=$_POST["adresa"];
        $sql="UPDATE narudzba as n  set adresa='$adresa' WHERE n.id=".$_SESSION["idKorpe"];
        $result = $con->query($sql);
        unset($_SESSION["idKorpe"]);
        echo($sql);
        header("Location: index.php");
    }
?>