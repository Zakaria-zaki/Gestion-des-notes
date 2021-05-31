<?php

  include("includes/db.php");
  include("includes/header.php");


$NUMETUD = $_POST['numetd'];
$INTNUMETUD = (int)$NUMETUD;

//la declaration des variables utiliser pour stocker les notes, matieres, coef
$MAT1 = $_POST['matiere1'];
$COF1 = $_POST['coef1'];
$INTCOF1 = (int)$COF1;
$NOTE1 = (is_int($_POST['note1']) ? (int)$_POST['note1'] : (float)($_POST['note1']));


$MAT2 = $_POST['matiere2'];
$COF2 = $_POST['coef2'];
$INTCOF2 = (int)$COF2;
$NOTE2 = (is_int($_POST['note2']) ? (int)$_POST['note2'] : (float)($_POST['note2']));

$MAT3 = $_POST['matiere3'];
$COF3 = $_POST['coef3'];
$INTCOF3 = (int)$COF2;
$NOTE3 = (is_int($_POST['note3']) ? (int)$_POST['note3'] : (float)($_POST['note3']));

$MAT4 = $_POST['matiere4'];
$COF4 = $_POST['coef4'];
$INTCOF4 = (int)$COF4;
$NOTE4 = (is_int($_POST['note4']) ? (int)$_POST['note4'] : (float)($_POST['note4']));

$MAT5 = $_POST['matiere5'];
$COF5 = $_POST['coef5'];
$INTCOF5 = (int)$COF5;
$NOTE5 = (is_int($_POST['note5']) ? (int)$_POST['note5'] : (float)($_POST['note5']));

$MAT6 = $_POST['matiere6'];
$COF6 = $_POST['coef6'];
$INTCOF6 = (int)$COF6;
$NOTE6 = (is_int($_POST['note6']) ? (int)$_POST['note6'] : (float)($_POST['note6']));

$MAT7 = $_POST['matiere7'];
$COF7 = $_POST['coef7'];
$INTCOF7 = (int)$COF7;
$NOTE7 = (is_int($_POST['note7']) ? (int)$_POST['note7'] : (float)($_POST['note7']));

$MAT8 = $_POST['matiere8'];
$COF8 = $_POST['coef8'];
$INTCOF8 = (int)$COF8;
$NOTE8 = (is_int($_POST['note8']) ? (int)$_POST['note8'] : (float)($_POST['note8']));

$MAT9 = $_POST['matiere9'];
$COF9 = $_POST['coef9'];
$INTCOF9 = (int)$COF9;
$NOTE9 = (is_int($_POST['note9']) ? (int)$_POST['note9'] : (float)($_POST['note9']));

$MAT10 = $_POST['matiere10'];
$COF10 = $_POST['coef10'];
$INTCOF10 = (int)$COF10;
$NOTE10 = (is_int($_POST['note10']) ? (int)$_POST['note10'] : (float)($_POST['note10']));

$MAT11 = $_POST['matiere11'];
$COF11 = $_POST['coef11'];
$INTCOF11 = (int)$COF11;
$NOTE11 = (is_int($_POST['note11']) ? (int)$_POST['note11'] : (float)($_POST['note11']));

$MAT12 = $_POST['matiere12'];
$COF12 = $_POST['coef12'];
$INTCOF12 = (int)$COF12;
$NOTE12 = (is_int($_POST['note12']) ? (int)$_POST['note12'] : (float)($_POST['note12']));

$TOTAL = (($INTCOF1 * $NOTE1) + ($INTCOF2 * $NOTE2) + ($INTCOF3 * $NOTE3) + ($INTCOF4 * $NOTE4) + ($INTCOF5 * $NOTE5) + ($INTCOF6 * $NOTE6) + ($INTCOF7 * $NOTE7) + ($INTCOF8 * $NOTE8) + ($INTCOF9 * $NOTE9) + ($INTCOF10 * $NOTE10) + ($INTCOF11 * $NOTE11) + ($INTCOF12 * $NOTE12));
$MOYGENERAL = ($TOTAL / ($INTCOF1 + $INTCOF2 + $INTCOF3 + $INTCOF4 + $INTCOF5 + $INTCOF6 + $INTCOF7 + $INTCOF8 + $INTCOF9 + $INTCOF10 + $INTCOF11 + $INTCOF12));





$sql = "INSERT INTO Matiere (intituler,coef) 
           VALUES ('$MAT1','$COF1'),
           ('$MAT2','$COF2'),
           ('$MAT3','$COF3'),
           ('$MAT4','$COF4'),
           ('$MAT5','$COF5'),
           ('$MAT6','$COF6'),
           ('$MAT7','$COF7'),
           ('$MAT8','$COF8'),
           ('$MAT9','$COF9'),
           ('$MAT10','$COF10'),
           ('$MAT11','$COF11'),
           ('$MAT12','$COF12')";



$sql3 = "SELECT * FROM Etudiant WHERE NumEtudiant = '$INTNUMETUD' ";
$result = $conn->query($sql3);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $ID = $row['id'];
     $NOM = $row['Nom'];
     $PRENOM = $row['Prenom'];
  }
} 


$sql2 = "INSERT INTO Note (id,valeur,intmatiere) 
           VALUES ('$ID','$NOTE1', '$MAT1'),
           ('$ID','$NOTE2', '$MAT2'),
           ('$ID','$NOTE3', '$MAT3'),
           ('$ID','$NOTE4', '$MAT4'),
           ('$ID','$NOTE5', '$MAT5'),
           ('$ID','$NOTE6', '$MAT6'),
           ('$ID','$NOTE7', '$MAT7'),
           ('$ID','$NOTE8', '$MAT8'),
           ('$ID','$NOTE9', '$MAT9'),
           ('$ID','$NOTE10', '$MAT10'),
           ('$ID','$NOTE11', '$MAT11'),
           ('$ID','$NOTE12', '$MAT12')";

$sql4 = "UPDATE Etudiant SET Moyenne = '$MOYGENERAL' WHERE id = '$ID'";
$result = $conn->query($sql4);





  
$conn->close();
?>




<h1>Moyenne</h1>
<br>
<div class="form-row" id="divetudiant">

                           <div class="form-group col-md-4">
                                  <label class="control-label">Nom :  <?php echo $NOM; ?></label>
                                </div>
                          <div class="form-group col-md-4">
                                  <label class="control-label">Prénom :  <?php echo $PRENOM; ?></label>
                                </div>
                          <div class="form-group col-md-4">
                                  <label class="control-label">N° Etudiant :  <?php echo $INTNUMETUD; ?></label>
                                </div>
                                
                           </div>      
                </div>
<br>
<table style="width:100%">
  <tr>
    <th>Matiere</th>
    <th>Coefficiant</th> 
    <th>Note</th>
  </tr>
  <tr>
    <td><?php echo $MAT1; ?> </td>
    <td><?php echo $INTCOF1; ?></td>
    <td><?php echo $NOTE1; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT2; ?> </td>
    <td><?php echo $INTCOF2; ?></td>
    <td><?php echo $NOTE2; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT3; ?> </td>
    <td><?php echo $INTCOF3; ?></td>
    <td><?php echo $NOTE3; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT4; ?> </td>
    <td><?php echo $INTCOF4; ?></td>
    <td><?php echo $NOTE4; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT5; ?> </td>
    <td><?php echo $INTCOF5; ?></td>
    <td><?php echo $NOTE5; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT6; ?> </td>
    <td><?php echo $INTCOF6; ?></td>
    <td><?php echo $NOTE6; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT7; ?> </td>
    <td><?php echo $INTCOF7; ?></td>
    <td><?php echo $NOTE7; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT8; ?> </td>
    <td><?php echo $INTCOF8; ?></td>
    <td><?php echo $NOTE8; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT9; ?> </td>
    <td><?php echo $INTCOF9; ?></td>
    <td><?php echo $NOTE9; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT10; ?> </td>
    <td><?php echo $INTCOF10; ?></td>
    <td><?php echo $NOTE10; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT11; ?> </td>
    <td><?php echo $INTCOF11; ?></td>
    <td><?php echo $NOTE11; ?></td>
  </tr>
   <tr>
    <td><?php echo $MAT12; ?> </td>
    <td><?php echo $INTCOF12; ?></td>
    <td><?php echo $NOTE12; ?></td>
  </tr>
  
</table>
<br>
<div class="form-row" id="divetudiant">

                           <div class="form-group col-md-4">
                                  <label class="control-label">Total : <?php echo $TOTAL; ?></label>
                                </div>
                          <div class="form-group col-md-4">
                                  <label class="control-label">Moyenne générale : <?php echo $MOYGENERAL; ?>/20</label>
                                </div>
                            <div class="form-group col-md-4">
                                  <label class="control-label"><?php if($MOYGENERAL >= 10){ echo "Admis"; }else{ echo "Non admis";} ?></label>
                                </div>
                                
                           </div> 
                                     
                </div>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script type="js/formulaire.js"></script>
</body>
</html>