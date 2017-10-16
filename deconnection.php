<?php  
  require 'connection.php';
  session_start();

  session_destroy();
?>
<container>
	<div container id="deconnection"></div>
<div align="center">
    <h3>Etes-vous sur de vouloir quitter</h3>
    </br>
    <div class="thumbnail"> 
    	<p>A bientot !</p>
    	<a href="index.php" class="btn btn-primary"></a>
    </div>