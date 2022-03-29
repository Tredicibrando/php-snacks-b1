<?php
$partite = [
[
'casa' => 'Basket Milano',
'opsite' => 'Basket Roma',
'punti_casa' => 45,
'punti_opsite' => 21,
],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="snack_1.css">

</head>
<body>

    <div class="flex">
        <h1>Match incredibile</h1>
        <div class="casa">
            <?php echo $partite[0] ?>
        </div>

        <div class="ospiti" ></div>
    </div>
    


</body>
</html>