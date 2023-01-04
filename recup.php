<?php
$db = new PDO('sqlite:db.sqlite');
$query = $db->query("SELECT * FROM task");
$query = $query->fetchAll(\PDO::FETCH_ASSOC);
$name = $query;
echo $name;
?>