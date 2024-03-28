<?php

    $nomes = ["Star Wars Episódio IV: Uma Nova Esperança (1977)", "Star Wars Episódio V: O Império Contra-Ataca (1980)", "Star Wars Episódio VI: O Retorno de Jedi (1983)", "Star Wars Episódio I: A Ameaça Fantasma (1999)", "Star Wars Episódio II: Ataque dos Clones (2002)", "Star Wars Episódio III: A Vingança dos Sith (2005)"];
    $notas = ["5", "6", "4", "8"];

    //atividade 1
    for($i=0; $i<count($nomes); $i++){
        echo $nomes[$i] . "<br>";
    }

    echo"================================<br>";
    //atividade 2
    for($i=0; $i<count($notas); $i++){
        echo $notas[$i] . "<br>";
    }

    echo"===========================<br>";
    //medias
    echo "sua media é: " . array_sum($notas) / count($notas);
?>