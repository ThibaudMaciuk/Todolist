<?php
function get_info(int $id)
{
    $db = new PDO('sqlite:db.sqlite');
    $query = $db->query("SELECT * FROM task WHERE id = '$id'");
    if (!$query)
    {
        return False;
    }
    $query = $query->fetch();
    //$name = $query["$nom"];
    if ($query[2]==0)
    {
        //echo get_info($id)[1];
        return $query;
    }
    else
    {
        return 1;
    }
    
}

//echo var_dump(get_info(1));


function get_all_info2()
{
    $b = 0;
    for ($i = 1; $b != 1; $i++)
    {
        echo "i est egal a $i";
        if (!get_info($i)[0])
        {
            echo "Fin";
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
function get_all_info()
{
   $b = 0;
    for ($i = 1; $b != 1; $i++)
    {
        echo "i est egal a $i";
        if (!get_info($i)[0])
        {
            echo "Fin";
            $b = 1;
        }
        elseif (get_info($i)[2]!=1)
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
//echo get_all_info();
echo get_info(2)[1];