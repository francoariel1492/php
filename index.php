<h1>Codigo Html</h1>

<?php
    #Esto va a imprimir
    echo "<h1>Hello World</h1>";
    print("Hola");
    //esto no se interpreta

    /*
    muchas
    lineas 
    de comentario
    */

    echo "<!--COMENTARIO HTML-->";

    #Variables
    // $nombre = "Franco Ariel Parente";
    $nombre = $_GET["nombre"];
    $texto = "Repaso de PHP con $nombre";
    $altura = $_GET["altura"];
    #En php se concatena con el .
    
    $textofinal = "<h1>".$texto.", su altura es: ".$altura."cm</h1>";

    echo $textofinal;
    echo $textofinal;
    echo $textofinal;
    $textofinal .= "Cambie el texto";
    echo $textofinal;

    # GET
    echo "<hr>";
    echo $_GET["nombre"];

    #Condiciones
    if($altura >= 180){
        echo '"<h3 style="background:green;">Eres una personal alta</h3>"';
    }else{
        echo "<h3>Eres una persona bajita</h3>";
    }


?>