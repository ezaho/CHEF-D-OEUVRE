<?php
//connexion à notre base de donnée et affiche 
//require 'dbh';
try {//nom du PDO
  $dbh = new PDO('mysql:host=localhost;dbname=forumoeuvre', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
$messages= array();
$recup_messages=$dbh->query("SELECT *FROM forumoeuvre ORDER BY id DESC");
while ($all = $recup_messages->fetch()) {
	$messages = $all;
}
foreach ($messages as $message => $value) {
	?>
	<h4><?php echo $message['pseudo'] ?> </h4>
	<p><?php echo $message['message']?></p>
	</hr>
	<?php
}
?>