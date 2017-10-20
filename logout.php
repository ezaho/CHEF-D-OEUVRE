<?php  
  require 'connection.php';
  session_start();

  session_destroy();
?>
<container>
	<div container id="logout">
<div id="deux" align="center">
    <h3>Etes-vous sur de vouloir quitter ?</h3>
    </br>
    <div class="thumbnail">    	
    	<a href="index.php?page=home" class="btn btn-primary"><p><h4>A bientot !</h4></p></a>      
    </div>
  </div>
</container>