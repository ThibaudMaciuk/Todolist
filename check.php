<?php

if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        echo "ID = $id";
            $db = new PDO('sqlite:db.sqlite');
            $query = $db->query("UPDATE task SET Fait = 1 WHERE ID = '$id'");
            if (!$query)
            {
                header('Location: index.php');
                
            }
            header('Location: index.php');
    }
    else
    {
        echo"Pas de variable Get";
    }