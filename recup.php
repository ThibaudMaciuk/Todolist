<?php
$db = new PDO('sqlite:db.sqlite');
$query = $db->query("SELECT * FROM task");
$query = $query->fetch();
$name = $query['Name'];
echo $name;
?>