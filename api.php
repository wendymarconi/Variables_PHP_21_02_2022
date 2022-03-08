<?php
    header('Access-Control-Allow-Origin: *');
    $nomUsu = (String) "Wendy Johanna Marconi Quintero";
    $edaUsu = (int) 30 ;
    $altUsu = (float) 1.67;

    $HobUsu = (array)[
        (string) "Escuchar Musica",
        (string) "Mirar Series",
        (string) "Viajar"
    ];

    $SoyInt = (bool) true ;
    $RutUsu = (Object) [];
    $rutUsu  -> levantar = (int) 5;
    $vacio = null;

    //$notengoDependencia = uninitialized;
    echo $nomUsu ;
    echo $edaUsu ;
    echo $altUsu ;
    var_dump ($HobUsu);
    echo $SoyInt;
    var_dump ($RutUsu);
    var_dump ($vacio);
    
?> 