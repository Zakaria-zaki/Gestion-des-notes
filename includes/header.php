<?php 

    include("includes/db.php");

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestion des Notes <?php if($active=='Formulaire') {echo"| Formulaire";}
  elseif ($active=='Moyenne') { echo"| Moyenne"; }?></title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" type="text/css" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

