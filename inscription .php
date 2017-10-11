 <?php
// session_start();

try {//nom du PDO
  $dbh = new PDO('mysql:host=localhost;dbname=forumoeuvre', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
//print_r($_POST);
if (isset($_POST["formconnect"])) {
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = sha1($_POST['mdp']);
	if (!empty($mail) && !empty($mdp)) {
		// requete si l'utilisateur existe vraiment
		$requser = $dbh->prepare("SELECT* FROM membre WHERE mail=$mail  && mdp=$mdp");
			$requser->execute(array($mail,$mdp));
			$userexist = $requser->rowcount();
			if ($userexist == 1) {
				$userinfo = $requser -> fetch();
			       $_SESSION['id'] = $userinfo['id'];
			       $_SESSION['mail'] = $userinfo['mail'];
			       $_SESSION['pseudo'] =$userinfo['pseudo'];
			       }
			      // header('location :tchat.php?'). id=$_SESSION['id']);
		   else{
		     	$message ="mauvais mail ou mot de passe incorrect";
		     	}
	 }
	else {
		 $message = "tous les champs doivent être completés";
	   }
}
  ?>

<div container id="inscription"></div>
<div align="center">
    <h3>Enregistrez-vous pour recevoir votre newsletter!</h3>
    </br></br>
    <form method="POST" action="forum.php">
       <input type="pseudo" name="pseudo" placeholder="pseudo"/> 
       <input type="email" name="mail" placeholder="mail"/>
       <input type="password" name="mdp" placeholder="mot de passe"/>
       <input type="submit" name="formconnect" value="s'inscrire"/>
    </form>
    <?php
    if (isset($message)){
    	echo "<font color='red'>" . $message="" ."</font color>";
      }?>
    </div>
    </div>
 