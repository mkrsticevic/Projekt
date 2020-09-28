<?php
    require("baza.php");
    session_start();

    
    if (isset($_GET["lijek"])) {
        $lijek=$_GET["lijek"];
    }
    if (isset($_SESSION["idKorpe"])) {
        $idnarudzba=$_SESSION["idKorpe"];
    }
    if(isset($_SESSION["id"])){
        $idKorisnik=$_SESSION["id"];
    }

    if(isset($_GET["izbrisi"])){
        $izbrisiKorpu=$_GET["izbrisi"];
    }
    if (isset($izbrisiKorpu)) {
        unset($_SESSION["idKorpe"]);
        echo($izbrisiKorpu);
    }

    if(isset($idKorisnik) && isset($idnarudzba))
    {
        $values="(".$idnarudzba.",".$idKorisnik.",NOW())";
        $sql="INSERT INTO narudzba (id, korisnikid, Datum) VALUES ".$values;
        $result = $con->query($sql);
        // echo($sql);
    }

    if (isset($lijek) && isset($idnarudzba)) {
            $sql="SELECT COUNT(*) br FROM narudzbalijek nl WHERE nl.lijekid=".$lijek." and nl.narudzbaid=".$idnarudzba;
    $result=$con->query($sql);
    while($row = $result->fetch_assoc()) {
        $br=$row["br"];
        echo($br);
    }
    if($br==0)
    {
        $values="(".$idnarudzba.",".$lijek.")";
        $sql="INSERT INTO narudzbalijek (narudzbaid,lijekid) VALUES ".$values;
        $result=$con->query($sql);
        echo($sql);
    }
    }
    


    

    header("Location: index.php");
?>