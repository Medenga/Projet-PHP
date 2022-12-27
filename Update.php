<!DOCTYPE html>
<html>
<head>
    <meta charset ="utf-8">
    <link rel="stylesheet" type = "text/css" href="MAIN.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"crossorigin="anonymous">
    <title>UPDATE</title>
</head>
<body class="ajouter_un_livre_background">
    <div class="cube">
        <a href="Read.php">
        <div class="close-container">
            <div class="leftright"></div>
            <div class="rightleft"></div>
                <label class="close"></label>
            </div>
        </div>
        </a>
    </div>
    <div class="div_titre_livre">
    <div class="titre_livre">
        <label><strong>UPDATE FORM</strong></label> 
    </div>
    <div>
        <p>(In order to be able to modify the information given for your book, please fill out this form. To leave this page, click on the cross.)</p>
    </div>
  </div>


    <div class="ajouter_un_livre">
      <div class="text_livre">
          <form  method="post" class="formulaire" action="Update.php">
       <table>
        <thead>
                <tr>
                    <th>
                        <span>
                             <label for="name" >Name</label>
                        </span>
                    </th>
                    <th>
                        <span>
                            <label for="writer" >Writer</label>
                        </span>
                    </th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                        <span>
                            <input type="text" name="name" placeholder="name">
                        </span>
                </td>
                <td>
                        <span>
                            <input type="text" name="writer" placeholder="writer">
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <label for="type">Type</label>
                        </span>
                </td>
                <td>
                        <span>
                            <label for="editor">Editor</label>
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <input type="text" name="type" placeholder="type">
                        </span>
                </td>
                <td>
                        <span>
                            <input type="text" name="editor" placeholder="editor">
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <label for="price">Price</label>
                        </span>
                </td>
                <td>
                        <span>
                            <label for="langage">Language</label>
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <input type="text" name="price" placeholder="price">
                        </span>
                </td>
                <td>
                        <span>
                           <input type="text" name="langage" placeholder="langage">
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <label for="date">Date de parution</label>
                        </span>
                </td>
                <td>
                        <span>
                           <label for="isbn">ISBN</label>
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <input type="text" name="date" placeholder="date">
                        </span>
                </td>
                <td>
                        <span>
                           <input type="text" name="isbn" placeholder="isbn">
                        </span>
                </td>
            </tr>
                <tr>
                    <td>
                        <span>
                             <label for="note">Note</label>
                        </span>
                    </td>
                    <td>
                        <span>
                             <label for="id">Id</label>
                        </span>
                    </td>
                </tr>
            <tr>
                <td>
                        <span>
                            <input type="text" name="note" placeholder="note">   
                        </span>
                </td>
                <td>
                        <span>
                            <input type="text"  name="id" placeholder="Put an id already insert"> 
                        </span>
                </td>
            </tr>
          </tbody>
        </table>
   </div>
  <div class="boutton-update-no">
    <button  style="background-color: #e6b3cc;" type="submit" name="update">Update</button>
  </div>
  </form>
  </div>
   </div>
    <footer><strong>Copyright | 2021 | All rights reserved</strong></footer>
</body>
</html>
<?php
    if (isset($_POST['update'])){
        include('db/Connexion.php');
        $name = $_POST['name'];
        $writer = $_POST['writer'];
        $type = $_POST['type'];
        $editor = $_POST['editor'];
        $price = $_POST['price'];
        $langage = $_POST['langage'];
        $date = $_POST['date'];
        $isbn = $_POST['isbn'];
        $note = $_POST['note'];
        if(empty($name)){
            header("Location: Update.php");
            echo "Nom is required";
        }
        else if(empty($writer)){
            header("Location: Update.php");
            echo "Prenom is required";
        }
        else if(empty($type)){
            header("Location: Update.php");
            echo "Nom is required";
        }
        else if(empty($editor)){
            header("Location: Update.php");
            echo "Prenom is required";
        }
        else if(empty($price)){
            header("Location: Update.php");
            echo "Nom is required";
        }
        else if(empty($langage)){
            header("Location: Update.php");
            echo "Prenom is required";
        }
        else if(empty($date)){
            header("Location: Update.php");
            echo "Nom is required";
        }
        else if(empty($isbn)){
            header("Location: Update.php");
            echo "Prenom is required";
        }
        else if(empty($note)){
            header("Location: Update.php");
            echo "Nom is required";
        }
        else{
            $req = $db->prepare('UPDATE user SET name=:name, writer=:writer, type=:type, editor=:editor, price=:price, langage=:langage, date=:date, isbn=:isbn, note=:note, modifier=:modifier, supprimer=:supprimer WHERE id=:id');
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
                'modifier' => ' ',
                'supprimer' => ' ',
                'id'=> $_POST['id']
            ]);
        }
}

?>