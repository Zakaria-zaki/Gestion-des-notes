<?php

  include("includes/db.php");
  include("includes/header.php");





$NUMETUD = $_POST['numetd'];
$INTNUMETUD = (int)$NUMETUD;


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
$INTCOF2 = (int)$COF2;
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
    if ($conn->query($sql) === true)
{
    echo "Records inserted successfully.";
}
else
{
    echo "ERROR: Could not able to execute $sql. "
        .$conn->error;
}


$sql3 = "SELECT * FROM Etudiant WHERE NumEtudiant = '$INTNUMETUD' ";
$result = $conn->query($sql3);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $ID = $row['id'];
  }
} else {
  echo "0 results";
}

echo $ID;

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
    if ($conn->query($sql2) === true)
{
    echo "Records inserted successfully.";
}
else
{
    echo "ERROR: Could not able to execute $sql. "
        .$conn->error;
}



  
$conn->close();

?>


<div class="container"><!-- container Begin -->

                
             <form id="myForm" method="POST" action="Formulaire.php">
                <div class="form-row" id="divetudiant">

                           <div class="form-group col-md-2">
                                  <label class="control-label">N° Etudiant :</label>
                                </div>
                           <div class="form-group col-md-10">
                                 <input type="text" class="form-control col-sm-6" id="numetd" rows="2" name="numetd"
                                placeholder="N° Etudiant" />
                                
                           </div>      
                </div>
                <div class="form-row" id="divMatiere1">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 1 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere1" rows="2" name="matiere1"
                                placeholder="Matiere 1" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef1" rows="2" name="coef1"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note1" rows="2" name="note1" 
                                placeholder="La note "/>
                           </div>
                                
                              

                </div>
                <div class="form-row" id="divMatiere2">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 2 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere2" rows="2" name="matiere2"
                                placeholder="Matiere 2" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef2" rows="2" name="coef2"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note2" rows="2" name="note2"
                                placeholder="La note "/>
                           </div>
                 </div>
                              
                    
                <div class="form-row" id="divMatiere3">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 3 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere3" rows="2" name="matiere3"
                                placeholder="Matiere 3" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef3" rows="2" name="coef3"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note3" rows="2" name="note3"
                                placeholder="La note "/>
                           </div>
                </div>
                              
                    
                <div class="form-row" id="divMatiere4">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 4 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere4 " rows="2" name="matiere4"
                                placeholder="Matiere 4" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef4" rows="2" name="coef4"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note4" rows="2" name="note4"
                                placeholder="La note "/>
                           </div>
                              
                              
                </div>
                <div class="form-row" id="divMatiere5">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 5 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere5" rows="2" name="matiere5"
                                placeholder="Matiere 5" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef5" rows="2" name="coef5"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note5" rows="2" name="note5"
                                placeholder="La note "/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere6">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 6 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere6" rows="2" name="matiere6"
                                placeholder="Matiere 6" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef6" rows="2" name="coef6"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note6" rows="2" name="note6"
                                placeholder="La note "/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere7">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 7 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere7" rows="2" name="matiere7"
                                placeholder="Matiere 7" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef7" rows="2" name="coef7"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note7" rows="2" name="note7"
                                placeholder="La note "/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere8">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 8 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere8" rows="2" name="matiere8"
                                placeholder="Matiere 8" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef8" rows="2" name="coef8"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note8" rows="2" name="note8"
                                placeholder="La note "/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere9">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 9 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere9" rows="2" name="matiere9"
                                placeholder="Matiere 9" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef9" rows="2" name="coef9"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note9" rows="2" name="note9"
                                placeholder="La note "/>
                           </div>
                               
                              
                              
                </div>
                <div class="form-row" id="divMatiere10">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 10 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere10" rows="2" name="matiere10"
                                placeholder="Matiere 10" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef10" rows="2" name="coef10"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note10" rows="2" name="note10"
                                placeholder="La note "/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere11">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 11 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere11" rows="2" name="matiere11"
                                placeholder="Matiere 11" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef11" rows="2" name="coef11"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note11" rows="2" name="note11"
                                placeholder="La note "/>
                           </div>
                               
                              
                              
                </div>
                <div class="form-row" id="divMatiere12">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 12 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere12" rows="2" name="matiere12"
                                placeholder="Matiere 12" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef12" rows="2" name="coef12"
                                placeholder="Coef" />
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note12" rows="2" name="note12"
                                placeholder="La note "/>
                           </div>
                                
                              
                              
                </div>
                <input type="submit" value="Calculer">
                <p style="color: red" id="erreur"></p>
                <p style="color: blue" id="erreur1"></p>
            </form>
</div><!-- Top Finish -->




<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script type="js/formulaire.js"></script>
<script type="text/javascript">
		document.forms["myForm"].addEventListener("submit", function(e) {
 
	var erreur;
	var erreur1;
 
	var inputs = this;

	var note1 = parseInt(document.getElementById("note1"));
	var note2 = parseInt(document.getElementById("note2"));
	var note3 = parseInt(document.getElementById("note3"));
	var note4 = parseInt(document.getElementById("note4"));
	var note5 = parseInt(document.getElementById("note5"));
	var note6 = parseInt(document.getElementById("note6"));
	var note7 = parseInt(document.getElementById("note7"));
	var note8 = parseInt(document.getElementById("note8"));
	var note9 = parseInt(document.getElementById("note9"));
	var note10 = parseInt(document.getElementById("note10"));
	var note11 = parseInt(document.getElementById("note11"));
	var note12 = parseInt(document.getElementById("note12"));

  
	// Traitement cas par cas (input unique)
	if (inputs["note"].value < 0 && ninputs["note"].value > 20 ) {
		erreur = "La note doits etres entre 0 et 20";
	}




 
	
	// Traitement générique
	for (var i = 0; i < inputs.length; i++) {
		console.log(inputs[i]);
		if (!inputs[i].value) {
			erreur = "Veuillez renseigner tous les champs";
			break;
		}
	}


    
	if (erreur || erreur1) {
		e.preventDefault();
		document.getElementById("erreur").innerHTML = erreur;
		return false;
	} else {
		alert('Formulaire envoyé !');
	}
	
});

	


</script>



</body>
</html>