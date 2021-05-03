<?php

  $host_name = 'db5001505821.hosting-data.io';
  $database = 'dbs1262929';
  $user_name = 'dbu1424414';
  $password = 'Kulwch2310!';
  $dbh = null;

// Connection to database
  
$dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

	<div id="bookMessages">

		<?php

//Requesting database for visitors' book's content
		
			$req = $dbh->query('SELECT firstName, name, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS comment_date_fr, subject, message FROM visitorsBook ORDER BY comment_date_fr DESC');
				while ($comments = $req->fetch()) {
		?>		
					<p id="who"><strong><?='Par'. ' '.htmlspecialchars($comments['firstName']).' '.htmlspecialchars($comments['name']); ?>, le </strong> <em><?= '  '.$comments['comment_date_fr'].'</em>' ?></p>
					<p id="whatFor"><strong>Sujet : <?= htmlspecialchars($comments['subject']); ?></strong></p>
					<p id="content"><?= nl2br(htmlspecialchars($comments['message'])); ?></p>
		<?php
				}	
			$req->closeCursor();	
		?>

	</div>
