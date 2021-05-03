<?php
  $host_name = 'db5001505821.hosting-data.io';
  $database = 'dbs1262929';
  $user_name = 'dbu1424414';
  $password = 'Kulwch2310!';
  $dbh = null;

// Connection to database

$dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Verifying the mail with a REGEX

if (isset($_POST['mail'])) {
	$_POST['mail'] = htmlspecialchars($_POST['mail']);

	if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])) {
		echo '<p>'.'Le mail saisi n\'est pas valide, veuillez recommencer la saisie.'.'</p>';
		?> <a href="contact.php">Retour au formulaire de contact</a> 
		<?php
	}

	else { 

	// Sending towards visitors' book

		$req = $dbh->prepare('INSERT INTO visitorsBook(comment_date, name, firstName, mail, subject, message) VALUES(NOW(), :name, :firstName, :mail, :subject, :message)');
		$req->execute(array(
			':name' => $_POST['name'],
			':firstName' => $_POST['firstName'],
			':mail' => $_POST['mail'],
			':subject' => $_POST['subject'],
			':message' => $_POST['message']));

		header('Location: visitorsBook.php');
		echo '<p>'.'Votre message a bien été envoyé'.'</p>';
	}
	$req->closeCursor();
}