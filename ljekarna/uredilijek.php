<?php
    require("baza.php");
    require("nav.php");
    $id=$_GET["id"];

    if (isset($id)) 
    {
        $sql="select * from lijek where id=".$id;
        $result = $con->query($sql);

        $ime="";
        $cijena=0;
        while($row = $result->fetch_assoc()) {
            $ime=$row["naziv"];
            $cijena=$row["cijena"];
            $kratak_opis=$row["kratak_opis"];

            }

            
        }
    else
    {
        echo("greska");
    }
?>

<div class="container">
  <h2>Uredite lijek</h2>
  <form action="urediPost.php" method="post">
    <div class="form-group">
      <label for="usr">Ime:</label>
      <input name="ime" type="text" class="form-control" id="ime" value=<?php echo($ime);?>>
    </div>
    <div class="form-group">
      <label for="usr">Kratak opis:</label>
      <input name="kratak_opis" type="text" class="form-control" id="ime" value=<?php echo($kratak_opis);?>>
    </div>
    <div class="form-group">
      <label for="cijena">Cijena:</label>
      <input name="cijena" type="number" class="form-control" id="cijena" value=<?php echo($cijena);?>>
    </div>
    <div class="input-group">
     <input type="file" name="file" id="file"><br>
    </div>
    <br>
    <input name="id" type="hidden" value=<?php echo($id) ?>>
    <button class="btn btn-info">Uredi</button>
  </form>
</div>