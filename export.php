<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "bdsona");
$output = '';


if(isset($_POST["export_reservation"])){
 $date_MaxRes = $_POST['dMaxRes'];
 $date_MaxRes = trim($date_MaxRes);

 $date_MinRes = $_POST['dMinRes'];
 $date_MinRes = trim($date_MinRes);

 
 $query ="SELECT * FROM reservation natural join vehicule natural join chauffeur where aller_res BETWEEN '$date_MaxRes' and '$date_MinRes' ";

 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    
             <th>Numero de reservation</th>  
             <th>Nom du devehicule</th>  
             <th>Marque de véhicule</th> 
             <th>Matricule</th>  
       <th>Nom du chaffeur</th>
       <th>Prenom du chauffeur</th>
       <th>Date daller</th>
       <th>Date de retour</th>
       <th>Kilometrage daller</th>
       <th>Kilometrage de retour</th>
       <th>Destination</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
     <tr>  
                         <td>'.$row["id_res"].'</td>  
                         <td>'.$row["nom_veh"].'</td>  
                         <td>'.$row["mrq_veh"].'</td> 
                         <td>'.$row["mat_veh"].'</td>  
                <td>'.$row["nom_chf"].'</td>  
                <td>'.$row["prenom_chf"].'</td>
                 <td>'.$row["aller_res"].'</td>  
                <td>'.$row["retour_res"].'</td>
                  <td>'.$row["kma_res"].'</td>  
                <td>'.$row["kmr_res"].'</td>
                <td>'.$row["dest_res"].'</td>

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=reservation.xls');
  echo $output;
 }
}
?>
