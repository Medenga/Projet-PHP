<html>
<head>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type = "text/css" href="MAIN.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
	<title>Read</title>
</head>
<body  class="accéder_à_la_liste_background">
	<div class="cube">
	    <a href="Home.php">
        <div class="close-container">
            <div class="leftright"></div>
            <div class="rightleft"></div>
                <label class="close"></label>
            </div>
        </div>
        </a>
    </div>
    <div class="div_titre_liste">
    <div class="titre_liste">
        <label><strong>LIST OF BOOKS</strong></label>
    </div>
    <div>
        <p>(In this area you will be able to access the list of available books.)</p>
    </div>
  </div>
	<div class="accéder_à_la_liste">
        <div class="text_liste">
		<?php 
include('db/Connexion.php');
// Chercher des données
$result = $db->query('SELECT * FROM user');
echo '<table id="table" class="table table-sm">';
echo '<tr>';
echo '<th scope="col">ID</th>';
echo '<th>Name</th>';
echo '<th>Writer</th>';
echo '<th>Type</th>';
echo '<th>Editor</th>';
echo '<th>Price</th>';
echo '<th>Langage</th>';
echo '<th>date</th>';
echo '<th>ISBN</th>';
echo '<th>Note</th>';
echo '<th></th>';
echo '<th></th>';
echo '</tr>';
while ($data = $result->fetch()) {
    echo '<tr>';
    echo '<td>';
    echo $data['id']  . '. ';
    echo '</td>';
    echo '<td>';
    echo $data['name']  . ' ';
    echo '</td>';
    echo '<td>';
    echo $data['writer']  . ' ';
    echo '</td>';
    echo '<td>';
    echo $data['type']  . ' ';
    echo '</td>';
    echo '<td>';
    echo $data['editor']  . ' ';
    echo '</td>';
    echo '<td>';
    echo $data['price']  . ' ';
    echo '</td>';
    echo '<td>';
    echo $data['langage']  . ' ';
    echo '</td>';
    echo '<td>';
    echo $data['date']  . ' ';
    echo '</td>';
    echo '<td>';
    echo $data['isbn']  . ' ';
    echo '</td>';
    echo '<td>';
    echo $data['note']  . ' ';
    echo '</td>';
    echo '<td style="border: 2px solid #80aaff;">';
    echo '<div style="background-color:#80aaff; text-align: center; border: 1px solid #80aaff;"><a style="text-decoration:none; color: black;" href="Update.php?id=' . $data['id'] .'"><strong>Edit</strong></a></div>';
    echo '</td>';
    echo '<td style="border: 2px solid #80aaff;">';
    echo '<div style="background-color:#80aaff; text-align: center; border: 1px solid #80aaff; text-decoration:none;"><a style="text-decoration:none; color: black;" href="Delete.php?id=' . $data['id'] .'"><strong>Delete</strong></a></div>';
    echo '</td>';
    echo '</tr>';
    echo '</br>';
    
}
echo '</table>';
$result->closeCursor();

if (
    isset($_POST['send']) &&
    isset($_POST['name']) && $_POST['name'] !== "" &&
    isset($_POST['writer']) && $_POST['writer'] !== "" &&
    isset($_POST['type']) && $_POST['type'] !== "" &&
    isset($_POST['editor']) && $_POST['editor'] !== "" &&
    isset($_POST['price']) && $_POST['price'] !== "" &&
    isset($_POST['langage']) && $_POST['langage'] !== "" &&
    isset($_POST['date']) && $_POST['date'] !== "" &&
    isset($_POST['isbn']) && $_POST['isbn'] !== "" &&
    isset($_POST['note']) && $_POST['note'] !== ""
) {
    $name = $_POST['name'];
    $writer = $_POST['writer'];
    $type = $_POST['type'];
    $editor = $_POST['editor'];
    $price = $_POST['price'];
    $langage = $_POST['langage'];
    $date= $_POST['date'];
    $isbn = $_POST['isbn'];
    $note = $_POST['note'];
$req = $db->prepare('INSERT INTO user(name, writer, type,editor,price,langage,date,isbn,note) VALUES (:name, :writer, :type,:editor,:price,:langage,:date,:isbn,:note)');
$req->execute([
    'name' => $name,
    'writer' => $writer,
    'type' => $type,
    'editor' => $editor,
    'price' => $price,
    'langage' => $langage,
    'date' => $date,
    'isbn' => $isbn,
    'note' => $note,
]);
header("Location: Read.php");
}
?>
</div>
	</div>
    <style>
        table, td {
  border: 1px solid black;
  font-size:15px;
}
th{
    border: none;
    font-size:15px;
}
table{
    margin-left: 20px;
    border: none;
    position: absolute;
    left: -1.5%; 
}
.table{
    width:95%;
}
.formulaire{
    width:60%;
    margin-left:100px;
}
.btn{
    margin-top:10px;
}
    </style>
    <footer><strong>Copyright | 2021 | All rights reserved</strong></footer>
</body>
</html>