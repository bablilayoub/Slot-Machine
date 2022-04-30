<?php

/**
 * BY AYOU BABLIL 
 */

// IF SPIN CLICKED
if (isset($_POST['spin'])) {
    // AUTOMATIC RELOAD THE PAGE
}

// IMAGES FOLDER
define('IMAGES_FOLDER', "/images/");

// SET STRING FOR EACH IMAGE
$image1 = IMAGES_FOLDER . '1.png';
$image2 = IMAGES_FOLDER . '2.png';
$image3 = IMAGES_FOLDER . '3.png';
$image4 = IMAGES_FOLDER . '4.png';
$image5 = IMAGES_FOLDER . '5.png';
$image6 = IMAGES_FOLDER . '6.png';
$image7 = IMAGES_FOLDER . '7.png';

// ON POST SELECT NEW RANDOM IMAGES
$image1_random = rand(1, 7);
$image2_random = rand(1, 7);
$image3_random = rand(1, 7);

// SET IMAGE 1 FROM THE RANDOM NUMBER
if ($image1_random == 1) {
    $image1_to_post = $image1;
} elseif ($image1_random == 2) {
    $image1_to_post = $image2;
} elseif ($image1_random == 3) {
    $image1_to_post = $image3;
} elseif ($image1_random == 4) {
    $image1_to_post = $image4;
} elseif ($image1_random == 5) {
    $image1_to_post = $image5;
} elseif ($image1_random == 6) {
    $image1_to_post = $image6;
} elseif ($image1_random == 7) {
    $image1_to_post = $image7;
}

// SET IMAGE 2 FROM THE RANDOM NUMBER
if ($image2_random == 1) {
    $image2_to_post = $image1;
} elseif ($image2_random == 2) {
    $image2_to_post = $image2;
} elseif ($image2_random == 3) {
    $image2_to_post = $image3;
} elseif ($image2_random == 4) {
    $image2_to_post = $image4;
} elseif ($image2_random == 5) {
    $image2_to_post = $image5;
} elseif ($image2_random == 6) {
    $image2_to_post = $image6;
} elseif ($image2_random == 7) {
    $image2_to_post = $image7;
}

// SET IMAGE 3 FROM THE RANDOM NUMBER
if ($image3_random == 1) {
    $image3_to_post = $image1;
} elseif ($image3_random == 2) {
    $image3_to_post = $image2;
} elseif ($image3_random == 3) {
    $image3_to_post = $image3;
} elseif ($image3_random == 4) {
    $image3_to_post = $image4;
} elseif ($image3_random == 5) {
    $image3_to_post = $image5;
} elseif ($image3_random == 6) {
    $image3_to_post = $image6;
} elseif ($image3_random == 7) {
    $image3_to_post = $image7;
}

// IF USER GOT JACKPOT
if ($image1_to_post == $image2_to_post and $image2_to_post == $image3_to_post) {
    $msg = "<div class='alert alert-primary' role='alert'>Jackpot</div>";
}

// IF USER WON
elseif (
    $image1_to_post == $image2_to_post or
    $image1_to_post == $image3_to_post or
    $image2_to_post == $image1_to_post or
    $image2_to_post == $image3_to_post or
    $image3_to_post == $image1_to_post or
    $image3_to_post == $image2_to_post
) {
    $msg = "<div class='alert alert-success' role='alert'>Win</div>";
}

// IF USER LOST
else {
    $msg = "<div class='alert alert-danger' role='alert'>Sorry You Lose</div>";
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Slot Machin</title>
</head>

<style>
    .slot-mchin {
        width: 100%;
        max-width: 650px;
        padding: 15px;
        margin: auto;
    }
</style>

<body class="text-center">
    <div class="container">
        <div class="container slot-mchin">
            <div class="d-flex align-items-center">
                <img style="width: 150px; height: 150px;" src="<?= $image1_to_post ?>" class="img-fluid border border-dark rounded float-start m-1 p-2" alt="...">
                <img style="width: 150px; height: 150px;" src="<?= $image2_to_post ?>" class="img-fluid border border-dark rounded float-start m-1 p-2" alt="...">
                <img style="width: 150px; height: 150px;" src="<?= $image3_to_post ?>" class="img-fluid border border-dark rounded float-start m-1 p-2" alt="...">
                <form action="" method="post">
                    <button name="spin" style="width: 150px; height: 150px;" class="btn btn-danger m-1">
                        <h3>SPIN</h3>
                    </button>
                </form>
            </div>
            <div class="w-100">
                <hr>
                <?= $msg ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>