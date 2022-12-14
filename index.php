<?php
require_once __DIR__ . "/Database/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="container d-flex">
        <div class="row row-cols-3">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5><?php echo $product->name ?></h5>
                            <p>Price: <?php echo $product->price ?>&euro;</p>
                            <?php if (get_class($product) === "Food") { ?>
                                <p>Ingredients: <?php echo $product->ingredients ?></p>
                                <p>Weight: <?php echo $product->weight ?></p>
                                <p>Expiration Date: <?php echo $product->expiration_date ?></p>
                            <?php } else if (get_class($product) === "Toy") { ?>
                                <p>Material: <?php echo $product->material ?></p>
                                <p>Color: <?php echo $product->color ?></p>
                            <?php } else if (get_class($product) === "Kennel") { ?>
                                <p>Size: <?php echo $product->size ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </section>
</body>

</html>