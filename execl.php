<?php

?>
<html>  
 <head>  
  <title>Exporter la table demande</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  



    <form method="post" action="export.php" id="export_reservation">
    <h3>Date min:</h3>

      <input title="Date et heure min" type="datetime-local" onfocus="datealler()" name="dMaxRes" id="dMaxRes" required>
      <h3>date max :</h3>
      <input title="Date et heure dmax" type="datetime-local" onfocus="dateretour()" name="dMinRes" id="dMinRes" required>



     <input type="submit" name="export_reservation" class="btn btn-success" value="Exporter les reservation " />
    </form>


   </div>  
  </div>  
 </body>  
</html>
