<?php
   // echo "je suis la page d'envoi";
// fichier pour inserer les messages dans la base de donnees
require 'connection.php';
if (!empty($_POST['pseudo'])&&!empty($_POST['message']))
 {
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$message = htmlspecialchars($_POST['message']);
	$requser = $dbh->prepare("INSERT INTO messages(pseudo,message)VALUES (:pseudo ,:message)");
	   $requser->bindValue(':pseudo',$pseudo);
		$requser->bindValue(':message',$message);
			$requser->execute();
		 	$userexist = $requser->rowcount();
		 	if ($userexist == 1) {
				$userinfo = $requser -> fetchAll;
			       $_SESSION['id_membre'] =$userinfo['id'];			      
			       $_SESSION['pseudo'] =$userinfo['pseudo'];
			       $_SESSION['message'] = $userinfo['message'];
			      			        			      
			        header('location:index.php?page=forum') . $_SESSION['id']; 
			   }
			   echo "<span class='success'>vos donnees ont ete envoyees</span>";
            }
		   // else{
		    // echo "mauvais mail ou mot de passe incorrect";
		     	// }	
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