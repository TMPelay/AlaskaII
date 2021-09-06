<?php

$i = 0;
$files[$i];
$dir = opendir("../files");

while ($elemento = readdir($dir)){
    if( $elemento != "." && $elemento != ".."){
        if( is_dir($path.$elemento) ){
            echo "<p><strong>CARPETA: ". $elemento ."</strong></p>";
        } else {
            $files[$i] = $elemento;
            $i++;
        }
    }
}

?>