<?php

    $imovel = [
        "tipo_imovel" => "casa", 
        "bairro" => "Crispim", 
        "valor" => 300000, 
        "cidade" => "Pindamonhangaba", 
        "tipo" => "venda", 
    ];

    //echo $imovel["bairro"];

    foreach($imovel as $v){
        echo "$v <br>";
    }

?>