<?php
function get_info($nom)
{
    $db = new PDO('sqlite:db.sqlite');
    $query = $db->query("SELECT * FROM task");
    $query = $query->fetch();
    //$name = $query["$nom"];
    return $query;
}

get_info('poubelle1');
?>