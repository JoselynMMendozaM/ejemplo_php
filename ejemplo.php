<?php
    //variables
    $nombre= "Joselyn Mendoza";
    $edad="25";
    $booleana="False":
    

    //información
    // echo y print son para mostrar
    print("Ejemplo 08/09/2024");
    echo "<br>Hola a todos"; 
    echo "<br>Suma: 10 + 20 = ", 10+20;
    echo "<br> 100";
    echo "<br>Bienvenidos: ", $nombre;

    //condicionante
    if($edad<18){
        echo "Es menor de edad";
    }else{
        echo "Es mayor de edad";

    }
    
    //ciclo
    for ($i=1; $i < 10; $i++) { 
        echo "<br>", $edad, "X", $i, " = ", $edad * $i; 
    }
?>