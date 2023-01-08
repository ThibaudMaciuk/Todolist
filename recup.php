<?php
function get_info(int $id)
{
    $db = new PDO('sqlite:db.sqlite');
    $query = $db->query("SELECT * FROM task WHERE ID = '$id'");
    if (!$query)
    {
        return False;
    }
    $query = $query->fetch();
    return $query;
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



function get_all_not()
{
   $b = 0;
    for ($i = 1; $b != 1; $i++)
    {
        //echo "i est egal a $i";
        if (!get_info($i))
        {
            //echo "Fin";
            $b = 1;
        }
        elseif (get_info($i)[2]==0)
        {
            $id = get_info($i)['ID'];
            $name=get_info($i)['Name'];
            echo"<label class='form-check-label text-left' for='flexSwitchCheckDefault'>$name</label>";
            echo "<a>&emsp;&emsp;</a>";
            echo "<a class='bi bi-check-circle text-right' href='check.php?id=$id'></a>";
            //$echo"<button type='submit' class='bi bi-check-circle'>";

            //echo"<input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' onchange='document.getElementById('swith').submit()' >";
            echo "<br />";
        }
    }

} 

function get_all_yes()
{
   $b = 0;
    for ($i = 1; $b != 1; $i++)
    {
        //echo "i est egal a $i";
        if (!get_info($i))
        {
            //echo "Fin";
            $b = 1;
        }
        elseif (get_info($i)[2]==1)
        {
            $name=get_info($i)['Name'];
            echo"<label class='form-check-label' for='flexSwitchCheckDefault'>$name</label>";
            echo"<input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' onchange='document.getElementById('switch').submit()' checked>";
            echo "<br />";
        }
    }

} 
//echo get_all_info();
//print_r(get_info(1));
//echo get_info(1)['Name'];
//get_all_info();