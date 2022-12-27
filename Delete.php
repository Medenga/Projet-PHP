<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Inconsolata" />
<?php 
include('db/Connexion.php');
if (isset($_POST['send'])){
    $req = $db->prepare('DELETE FROM user WHERE id=:id');
    $req->execute(['id' => $_GET['id']]);
    header('Location: Read.php');
}
else if (isset($_POST['no'])){
    header('Location: Read.php');
}
$link = mysqli_connect("localhost", "root", "", "cours_esilv");
?>
<?php
if ($link === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id='$id'";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo '<table style="display: flex; justify-content: center; margin-top:5%;" id="table" class="table table-sm">';
        echo '<tr>';
        echo '<th scope="col">ID</th>';
        echo '<th>Name</th>';
        echo '<th>Writer</th>';
        echo '<th>Type</th>';
        echo '<th>Editor</th>';
        echo '<th>Price</th>';
        echo '<th>Langage</th>';
        echo '<th>Date</th>';
        echo '<th>ISBN</th>';
        echo '<th>Note</th>';
        echo '<th></th>';
        echo '<th></th>';
        echo '</tr>';
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['writer'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['editor'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['langage'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['isbn'] . "</td>";
            echo "<td>" . $row['note'] . "</td>";
            $name = $row['name'];
            $writer = $row['writer'];
            $type = $row['type'];
            $editor = $row['editor'];
            $price = $row['price'];
            $langage = $row['langage'];
            $date = $row['date'];
            $isbn = $row['isbn'];
            $note = $row['note'];
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    } else {
        echo "no result";
    }
} else {
    echo "ERROR: Could not able to execute $sql. "
        . mysqli_error($link);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>DELETE</title>
</head>
<body style="background-color: #80aaff;">
<form method="post"  style="margin-top: 100px;">
<style>
  td, th{
    font-family: Inconsolata;
  }
  h2{
    font-size: 30px;
    font-family: Inconsolata;
    text-align: center;
  }
.container { 
  height: 200px;
  position: relative;
  border: 3px solid; 
}
.annuler { 
  height: 50px;
  width: 100px;
  position: relative;
  border: 1px solid black;
}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.centertext {
  margin: 0;
  position: absolute;
  top: 30%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.centerannule {
  margin: 0;
  position: absolute;
  top: 70%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
footer{
  position: fixed;
  bottom: 0%;
  width: 100%;
  height: 25px;
  text-align: center;
  color: black;
  font-size: 16px;
  font-family: Inconsolata;
}
</style>
  <div>
  <h2 class="centertext">Êtes-vous sur de vouloir supprimer le livre d'ID"<?php echo $id; ?>" et qui a pour nom "<?php echo $name; ?>" ?</h2>
  <div class="col">
  <button type="submit" class="btn btn-primary container center"  class="btn btn-primary" name="send">Delete !</button>
</div>
<div>
    <button type="submit" class="btn btn-light annuler centerannule"  class="btn btn-primary" name="no">Cancel</button>
    </div>
  </div>
</form>
<footer><strong>Copyright | 2021 | All rights reserved</strong></footer>
</body>
</html>