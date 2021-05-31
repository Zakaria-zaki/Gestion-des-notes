<?php
  include("includes/db.php");
  include("includes/header.php");
    
?>

<div class="container"><!-- container Begin -->
 
 <h1>Veuillez Saisir vous notes et matiere </h1>   
 <br>

<?php
 include("Formulaire.php");
 if (isset($_POST['submit'])){   header("moyenne.php");   }
 ?>



	


</div><!-- Top Finish -->



<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script type="js/formulaire.js"></script>



</body>
</html>





