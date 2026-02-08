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

    <header style="height: 90px;" class="bg-success d-flex justify-content-start align-items-center px-4">
        <img src="./assets/logo-boolify.png" alt="logo" style="height: 50px;">
    </header>

    <main class="bg-dark h-100 py-4">
        <h1 class="fs-2 text-center text-white text-uppercase py-4 fw-bold">Our disk</h1>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($disks as $disk) { ?>
                    <div class="col d-flex mb-5">
                        <div class="card h-100 text-center bg-secondary text-white w-100 rounded-2 m-3">
                            <img src="<?php echo $disk["cover"] ?>" class="card-img-top" alt="<?php echo $disk["titolo"] ?>">

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-text small fw-bold"><?php echo $disk["titolo"] ?></h5>
                                    <p class="card-text text-light small fw-bold"><?php echo $disk["artista"] ?></p>
                                </div>
                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    <p class="fw-bold mb-1">Year:<?php echo $disk["anno"] ?></p>
                                    <p class="fw-bold mb-0"><?php echo $disk["genere"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </main>

    <footer class="bg-success">

    <div class="container d-flex justify-content-center align-items-center">
        <span class="py-2"> © Boolify Tutti i diritti riservati.</span>
    </div>

    </footer>

</body>

</html>