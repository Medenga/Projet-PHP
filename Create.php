<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type = "text/css" href="MAIN.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
	<title>CREATE</title>
</head>
<body class="ajouter_un_livre_background">
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
    <div class="div_titre_livre">
    <div class="titre_livre">
        <label><strong>CREATE FORM</strong></label>
    </div>
    <div>
        <p>(In order to add your book, please fill out this form.)</p>
    </div>
  </div>
    <div class="ajouter_un_livre">
      <div class="text_livre">
          <form id="ajout" class="formulaire" method="post" action="Read.php">
       <table>
        <thead>
                <tr>
                    <th>
                        <span>
                             <label for="name">Name</label>
                        </span>
                    </th>
                    <th>
                        <span>
                            <label for="writer">Writer</label>
                        </span>
                    </th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                        <span>
                            <input type="text" name="name" placeholder="name" >
                        </span>
                </td>
                <td>
                        <span>
                            <input type="text" name="writer" placeholder="writer" >
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <label for="type" >Type</label>
                        </span>
                </td>
                <td>
                        <span>
                            <label for="editor" >Editor</label>
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <input type="text"  name="type" placeholder="type" >
                        </span>
                </td>
                <td>
                        <span>
                            <input type="text"  name="editor" placeholder="editor" >
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <label for="price" >Price</label>
                        </span>
                </td>
                <td>
                        <span>
                            <label for="langage" >Language</label>
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <input type="text" name="price" placeholder="price" >
                        </span>
                </td>
                <td>
                        <span>
                           <input type="text" name="langage" placeholder="language" >
                        </span>
                </td>
            </tr>
            <tr>
                <td>
                        <span>
                             <label for="date" >Date</label>
                        </span>
                </td>
                <td>
                        <span>
                           <label for="isbn" >ISBN</label>
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
                           <input type="text" name="isbn" placeholder="isbn" >
                        </span>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="aligner">
    <table>
        <thead>
                <tr>
                    <th>
                        <span>
                             <label for="note">Note</label>
                        </span>
                    </th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                        <span>
                            <input class="zone_text" type="text" name="note" placeholder="note" >   
                        </span>
                </td>
            </tr>
          </tbody>
        </table>
   </div>
  <div class="boutton-envoyer">
    <button  style="background-color: #e6b3cc;" type="submit" class="btn btn-primary" name="send">Send</button>
  </div>
  <br>
  </form>
  </div>
  <br>
  <br>
   </div>
    <footer><strong>Copyright | 2021 | all rights reserved</strong></footer>
</body>
</html>