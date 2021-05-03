<?php
function visitCount() {

	$host_name = 'db5001505821.hosting-data.io';
	$database = 'dbs1262929';
	$user_name = 'dbu1424414';
	$password = 'Kulwch2310!';
	$dbh = null;

	$dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	$ip = $_SERVER['REMOTE_ADDR'];
	$date = date('d-m-Y');

	$req = $dbh->prepare('INSERT INTO visitorsStats(ip, visitDate, pagesViewed) VALUES(:ip, :date, 1) ON DUPLICATE KEY UPDATE pagesViewed = pagesViewed + 1');
	$req->execute(array(':ip' => $ip, ':date' => $date'));
}

