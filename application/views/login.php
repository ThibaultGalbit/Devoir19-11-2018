<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
</head>
<body>
<form method='POST' action="index.php/C_region/connexion/">
<input type="texte" name="txtLogin" id="txtLogin">
<input type="submit" value="connexion" name="connexion "id="connexion">
</form>	
<div id="Ville"></div>
</body>
</html>