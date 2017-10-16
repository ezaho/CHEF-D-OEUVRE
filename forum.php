<?php 
require 'connection.php';
   $requser = $dbh->prepare("SELECT* FROM messages ORDER BY date DESC LIMIT 5");
          
 ?>
<container> 
<section id="une">
<form method="post" class="formulaire">
<h3>FORUM</h3>
<p>Partager ici vos astuces ,trucs et bons plans</p>
    <div class="return"></div> <br>
    <input type="text" placeholder="votre pseudo" name="pseudo"> <br> <br>
    <textarea  placeholder="votre message" name="message"></textarea> <br> <br>
    <input class="submit" type="submit" value="envoyer..."> <br>
    <div class="afficher"></div>
</form>
</section>
</container>