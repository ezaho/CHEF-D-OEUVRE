<?php
   // echo "je suis la page d'envoi";
// fichier pour inserer dans la base de donnees
try {//nom du PDO
  $dbh = new PDO('mysql:host=localhost;dbname=forumoeuvre', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
if (!empty($_POST['pseudo'])&&!empty($_POST['message']))
 {
	$pseudo = mysql_real_escape_string(htmlspecialchars(trim($_POST['pseudo'])))
	$message = mysql_real_escape_string(htmlspecialchars(trim($_POST['message'])))
	$dbh->exec("INSERT INTO forumoeuvre(id,pseudo,message) VALUES ('','$pseudo','$message')")
	echo "<span class='success'>vos donnees ont ete envoyees</span>";
}
else{
	echo "<span class='error'>Veuillez completer tous les champs</span>";
}
// $(document).ready(function(){
// 	$('.formulaire').submit(function(){
//        	var pseudo=$(.'pseudo').val();
//        	var message=$(.'message').val();
//       $.post('envoi.php',{nom:pseudo,message:message},function(donnees){
//             $('.return').html(donnees).slidedown();
//             $('.pseudo').val('');
//             $('.message').val('');
            
//           });
//       return false;
//      });




?>