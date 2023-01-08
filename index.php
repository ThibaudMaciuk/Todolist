<?php
$date = date('d/m');

require 'recup.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Todo List</title>

</head>
<body>

    <header class="py-4 shadow">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-dark">

            <div class="container ">
                <a class="navbar-brand text-uppercase fw-bold text-light" href="#" text-center>
                    <span class="bg-primary bg-gradient p-1 rounded-3 text-light">ToDo</span>List
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="#">Nouvelle tache</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <main>
        <section class="container "> 
            <div class="row py-4">
                <div class="my-5 col-4 text-center shadow rounded">
                    <h1>ToDo List</h1>
                    <h3><?php echo $date;?> </h3>
                    <br />
                    <form id="switch" name="switch "action="index.php" method="post">
                        <div class="form-check form-switch">
                            <?php get_all_not(); ?>
                        </div>
                    </form>
            </div>
        </section>

    </main>

    <footer>

    </footer>

</body>
</html>