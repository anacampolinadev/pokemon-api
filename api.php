<?php
    $url = "https://www.canalti.com.br/api/pokemons.json";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = json_decode(curl_exec($ch));

    //print_r($res);
    


    /* foreach($res->pokemon as $pokemon){
        echo"$pokemon->name"."<br>";

    } */
  

?>