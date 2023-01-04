<?php
$db = new PDO('sqlite:db.sqlite');
$query = $db->query("SELECT * FROM task where id = 1");
$retour = $retour->fetch();
echo $retour['name'];
?>