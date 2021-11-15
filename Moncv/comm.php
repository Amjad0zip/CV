<?php
$conn=mysqli_connect('localhost','root','','moncv') or die(mysqli_error());
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$EMAIL=$_POST['email'];
$COMM=$_POST['comm'];
$req="insert into moncv(nom,prenom,email,comm) values ('$NOM','$PRENOM','$EMAIL','$COMM')";
$res=mysqli_query($conn,$req);
?>
<!DOCTYPE html>
<html>
<head>
	<title>page inscription</title>
	<link rel="stylesheet" href="style.css">
	<style>
	body{
	box-shadow: 1px 6px 17px grey;
	margin-right:35%;
	margin-left:35%;
	margin-top:20%;
	padding-top:10px;
	padding-bottom:10px;
	background-image:url('img/back.jpg');
	background-size:100%;
	color:white;
	}
	.btn{
	width:100%
	}
		</style>
	</head>
	<body>
	<form>
		<table align="center">
		<tr>
			<td align="right">Nom</td>
			<td><?php echo ($NOM)?></td>
		</tr>
		<tr>
			<td align="right">prenom</td>
			<td><?php echo ($PRENOM)?></td>
		</tr>
		<tr>
			<td align="right">Email</td>
			<td><?php echo ($EMAIL)?></td>
		</tr>
		<tr>
			<td align="right">commentaire</td>
			<td><?php echo ($COMM)?></td>
		</tr>
		</table>
		</form>
		</body>
		</html>