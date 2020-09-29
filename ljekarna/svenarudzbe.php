<?php
require("nav.php");
require("baza.php");

$sql="SELECT n.id,n.datum,n.adresa,n.dostavljeno,k.email FROM narudzba as n INNER JOIN korisnik as k on k.id=n.korisnikid";
$result = $con->query($sql);

?>
<div class="container">
<h1>Dostave</h1>
<table class="table">
<thead>
      <tr>
        <th>dostava id</th>
        <th>Mail</th>
        <th>Stanje</th>
        <th>Dostavljeno</th>
        <th>Adresa</th>
      </tr>
    </thead>
    <tbody> 
    <?php
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo("<tr>"
            .
            "<td>".$row["id"]."</td>"
            ."<td>".$row["email"]."</td>"
            ."<td>".$row["dostavljeno"]."</td>"
            ."<td><a name='dostavi' href='dostavi.php?id=".$row["id"]."'> <span class='glyphicon glyphicon-plus'></a></span></td>"
            ."<td>".$row["adresa"]."</td>"
        );
    }
}
    ?>
    </tbody>
</table>
</div>