<?php

  include("includes/db.php");
  include("includes/header.php");
  
?>


<div class="container"><!-- container Begin -->

                
             <form id="myForm" method="POST" action="moyenne.php">
                <div class="form-row" id="divetudiant">

                           <div class="form-group col-md-2">
                                  <label class="control-label">N° Etudiant :</label>
                                </div>
                           <div class="form-group col-md-10">
                                 <input type="text" class="form-control col-sm-6" id="numetd" rows="2" name="numetd"
                                placeholder="N° Etudiant" required/>
                                
                           </div>      
                </div>
                <div class="form-row" id="divMatiere1">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 1 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere1" rows="2" name="matiere1"
                                placeholder="Matiere 1" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef1" rows="2" name="coef1"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note1" rows="2" name="note1" 
                                placeholder="La note " required/>
                           </div>
                                
                              

                </div>
                <div class="form-row" id="divMatiere2">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 2 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere2" rows="2" name="matiere2"
                                placeholder="Matiere 2" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef2" rows="2" name="coef2"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note2" rows="2" name="note2"
                                placeholder="La note " required/>
                           </div>
                 </div>
                              
                    
                <div class="form-row" id="divMatiere3">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 3 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere3" rows="2" name="matiere3"
                                placeholder="Matiere 3" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef3" rows="2" name="coef3"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note3" rows="2" name="note3"
                                placeholder="La note" required/>
                           </div>
                </div>
                              
                    
                <div class="form-row" id="divMatiere4">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 4 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere4 " rows="2" name="matiere4"
                                placeholder="Matiere 4" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef4" rows="2" name="coef4"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note4" rows="2" name="note4"
                                placeholder="La note" required/>
                           </div>
                              
                              
                </div>
                <div class="form-row" id="divMatiere5">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 5 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere5" rows="2" name="matiere5"
                                placeholder="Matiere 5" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef5" rows="2" name="coef5"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note5" rows="2" name="note5"
                                placeholder="La note " required/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere6">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 6 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere6" rows="2" name="matiere6"
                                placeholder="Matiere 6" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef6" rows="2" name="coef6"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note6" rows="2" name="note6"
                                placeholder="La note " required/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere7">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 7 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere7" rows="2" name="matiere7"
                                placeholder="Matiere 7" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef7" rows="2" name="coef7"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note7" rows="2" name="note7"
                                placeholder="La note " required/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere8">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 8 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere8" rows="2" name="matiere8"
                                placeholder="Matiere 8" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef8" rows="2" name="coef8"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note8" rows="2" name="note8"
                                placeholder="La note " required/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere9">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 9 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere9" rows="2" name="matiere9"
                                placeholder="Matiere 9" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef9" rows="2" name="coef9"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note9" rows="2" name="note9"
                                placeholder="La note " required/>
                           </div>
                               
                              
                              
                </div>
                <div class="form-row" id="divMatiere10">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 10 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere10" rows="2" name="matiere10"
                                placeholder="Matiere 10" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef10" rows="2" name="coef10"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note10" rows="2" name="note10"
                                placeholder="La note " required/>
                           </div>
                                
                              
                              
                </div>
                <div class="form-row" id="divMatiere11">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 11 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere11" rows="2" name="matiere11"
                                placeholder="Matiere 11" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef11" rows="2" name="coef11"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note11" rows="2" name="note11"
                                placeholder="La note " required/>
                           </div>
                               
                              
                              
                </div>
                <div class="form-row" id="divMatiere12">

                           <div class="form-group col-md-2">
                                  <label class="control-label">Matiere 12 :</label>
                                </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-6" id="matiere12" rows="2" name="matiere12"
                                placeholder="Matiere 12" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="text" class="form-control col-sm-3" id="coef12" rows="2" name="coef12"
                                placeholder="Coef" required/>
                           </div>
                           <div class="form-group col-md-3">
                                 <input type="note" class="form-control col-sm-3" id="note12" rows="2" name="note12"
                                placeholder="La note " required/>
                           </div>
                                
                              
                              
                </div>
                <input type="submit" value="Calculer">
                <p style="color: red" id="erreur"></p>
                <p style="color: blue" id="erreur1"></p>
            </form>
			 <?php
			 if (isset($_POST['submit'])){   header("moyenne.php");   }
			 ?>
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