<?php require_once "./functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header style="height: 80px;" class="bg-success d-flex justify-content-start align-items-center px-4">
        <img src="./assets/logo-boolify.png" alt="logo" style="height: 45px;">
    </header>

    <main class="bg-dark vh-100">
        <h1 class="fs-2 text-center text-white text-uppercase py-4">Our disk</h1>
        
        <?php foreach ($disks as $disk){ ?>
        
        <p class="text-white">ciao <?php echo $disk["titolo"]?></p>

        <?php
        }
        ?> 



    </main>


    <footer>

    </footer>

</body>

</html>