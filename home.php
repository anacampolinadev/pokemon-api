<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/card.css">
    <title>Home</title>
</head>
<body>
    <?php
        require_once "header.php";
        require_once "api.php";
        

        $search = $_GET['search'] ?? null;
        if($search){
            //foreach usando função
            $res->pokemon = array_filter($res->pokemon, function($pokemon) use($search) {
                $search = strtolower($search);
                $pokemon->name = strtolower($pokemon->name);
                return stripos($pokemon->name,$search) !== false;
            });
        } 
        
        foreach($res->pokemon as $pokemon){
                echo "
                <div class='box2'>
                    <div class='card-title'>
                        <div><strong>$pokemon->name</strong></div>
                        <figure>
                            <a href='card.php?ID=$pokemon->id'><img src='$pokemon->img' alt='Placeholder image'></a>
                        </figure>      
                    </div>
                </div>
                    ";
            }
    ?>
   
</body>
</html>