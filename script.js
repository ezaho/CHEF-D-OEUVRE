<script type="text/javascript">
   $(document).ready(function(){
       recupMessages();
       $('.formulaire').submit(function(){
       	var pseudo=$('.pseudo').val();
       	var message=$('.message').val();
       $.post('envoi.php',{pseudo:pseudo,message:message},function(donnees){
            $('.return').html(donnees).slidedown();
            $nom.val('');
            $message.val('');
            recupMessages();
      });
      return false;
     });
       function recupMessages(){
        $.post('recup.php',function(data){
          $('.afficher').html(data);
        });
       }
       setInterval(recupMessages,1000);
   });
</script>
<!-- <form method="post" class="formulaire">
<h3>FORUM</h3>
<p>Partager ici vos astuces ,trucs et bons plans</p>
  <div class="return"></div>
  	 <input type="text" placeholder="votre pseudo" name="pseudo"><br>
    <textarea  placeholder="votre message" name="message"></textarea><br>
     <input class="submit" type="submit" value="envoyer...">
  <div class="afficher"></div>
</form> -->