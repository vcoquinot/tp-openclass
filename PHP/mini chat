<!DOCTYPE html>
<html>
<head>
	<title>Mini-Chat</title>
</head>
<body>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
<h1>Bienvenue !</h1>
<p>Nom de la base de données : test<br />
Nom de la table : minichat</p>
<?php
if (isset($_GET['nick'])) {
	?>
	<form method="post" action="minichat_post.php">
		<p>
			<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php echo $_GET['nick'] ?>"><br />
			<label for="message">Message</label> : <input type="text" name="message" id="message" placeholder="Votre message"><br />
			<input type="submit" value="Valider" />
		</p>
	</form>

<?php
}
else {
?>

<form method="post" action="minichat_post.php">
	<p>
		<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"><br />
		<label for="message">Message</label> : <input type="text" name="message" id="message" placeholder="Votre message"><br />
		<input type="submit" value="Valider" />
	</p>
</form>

<?php
}
$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') as date_message FROM minichat ORDER BY ID DESC');


while ($donnees = $reponse->fetch())
{

 echo ($donnees['date_message']) . ' : <strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '<br />';

}

$reponse->closeCursor(); 
?>

</body>
</html>
