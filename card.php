<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/card.css">
    <title>Card</title>
</head>
<body>
    <?php
    require_once "api.php";
    require_once "header.php";
    $card = $_GET['ID'];

    foreach($res->pokemon as $pokemon){
        if(empty($card)){
            echo "erro";
        } else {
            if($pokemon->id == $card){
                echo " <table class='box2'>
            <div class='card'> 
                <div class='card-title'>
                <div><strong>$pokemon->name</strong>
                    <figure>
                    <img src='$pokemon->img' />
                    </figure>
                </div>
              </div>
            </div>
        </table>
        ";
            }
        }
    }
    ?>
    
</body>
</html>