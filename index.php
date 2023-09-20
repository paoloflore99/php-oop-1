<?php
require_once __DIR__ ."/class/Movie.php";
$movis = json_decode(file_get_contents('./js/store-movi.json'));
var_dump($movis);


?>

<head>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <link rel="stylesheet" href="./css/style.css"><!--css-->
        <title>PHP-OOP</title>
    </head>
<body>
    
<div class="container">
    <div class="row">
        <?php foreach ($movis as $movi) {?>
        <div class="card distanza" style="width: 18rem;">
            <img src="<?php echo $movi -> copertina  ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movi ->titolo ?></h5>
                <p class="card-text"><?php echo $movi -> descrizione?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

    <script src="./js/main.js"></script>
</body>
</html>