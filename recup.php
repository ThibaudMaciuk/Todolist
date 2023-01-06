<?php
function get_info(int $id)
{
    $db = new PDO('sqlite:db.sqlite');
    $query = $db->query("SELECT * FROM task WHERE Fait = '0'");
    $query = $query->fetch();
    //$name = $query["$nom"];
    return $query;
}

//echo var_dump(get_info(1));

function get_all_info()
{
    $b = 0;
    for ($i = 1; $b != 1; $i++)
    {
        if (!get_info($i))
        {
            $b = 1;
        }
        else
        {
            $name=get_info($i)[1];
            echo"<label class='form-check-label' for='flexSwitchCheckDefault'>$name</label>";
            echo"<input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' onchange='document.getElementById('swith').submit()' checked>";
            echo "<br />";
            //echo"  <td><a href='modify.php?id=".get_all_cred($i, $good_id)[0]."' class='bi bi-wrench text-decoration-none text-dark'></a><a href='delete.php?id=".get_all_cred($i, $good_id)[0]."' class='bi bi-trash text-decoration-none text-dark'></a></td>";
            //echo"</tr>";

            //echo '<pre>'; print_r(get_all_cred($i, $good_id)); echo '</pre>';
        }
    }

}
echo get_all_info();
?>