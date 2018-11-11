<!-- this is for creating objects of the databasetable class -->
	<?php
	require '../connect_db/connect.php';
	require '../models/DatabaseTable.php';
	$userDBTable = new DatabaseTable($pdo,'users');
	$catDBTable = new DatabaseTable($pdo,'categories');
	$probcatDBTable = new DatabaseTable($pdo,'prob_categories');
	?>