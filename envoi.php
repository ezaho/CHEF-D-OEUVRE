<?php
   // echo "je suis la page d'envoi";
// fichier pour inserer les messages dans la base de donnees
require 'connection.php';
if (!empty($_POST['pseudo'])&&!empty($_POST['message']))
 {
	$pseudo = mysql_real_escape_string(htmlspecialchars(trim($_POST['pseudo'])))
	$message = mysql_real_escape_string(htmlspecialchars(trim($_POST['message'])))
	$dbh->exec("INSERT INTO messages(id,pseudo,message)VALUES ('','$pseudo','$message')")
	echo "<span class='success'>vos donnees ont ete envoyees</span>";
}
else{
	echo "<span class='error'>Veuillez completer tous les champs</span>";
}
$(document).ready(function(){
	$('.formulaire').submit(function(){
       	var pseudo=$(.'pseudo').val();
       	var message=$(.'message').val();
      $.post('envoi.php',{nom:pseudo,message:message},function(donnees){
            $('.return').html(donnees).slidedown();
            $('.pseudo').val('');
            $('.message').val('');
            
          });
      return false;
     });




?>