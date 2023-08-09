<?php
/* inicio de secion */
$usuario=strval(readline("usuario: \n"));
$contraseña=strval(readline("contraseña: \n"));

/* formulario */
$nombre=strval(readline("Ingresa nombre: \n"));

$ndt=intval(readline("ingresa un numero de documento: \n"));

$genero=strval(readline("Ingresa tu genero: \n"));

$edad=intval(readline("ingresa tu edad: \n"));

$estructura=strval(readline("escribe tu estructura corporal: \n"));

$peso=strval(readline("escribe tu peso:\n"));

$fumar=strval(readline("eres fumador: \n"));

echo "tu nombre es:$nombre\n
tu numero de documento es: $ndt\n
tu genero es: $genero\n
tu edad:$edad\n
tu estructura corporal es: $estructura\n
tu pesas: $peso\n
tu peso es: $fumar\n";

/* buscador */
$buscar=strval(readline("buscar por nombre: \n"));

$numero2=intval(readline("buscar por numero de documento: \n"));


if ($nombre == $buscar or $numero2 == $ndt):
        echo "la persona que busca es $nombre\n";
    else:
        echo "lo sentimos pero la persona que busca no se encuentra en nuestra base de datos\n";
endif;

/* edad y genero de la persona */
echo "tu genero es: $genero\n";
echo "tu edad es:$edad\n";
echo "gracias por su atencion\n";
?>