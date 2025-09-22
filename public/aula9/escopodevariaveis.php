<?php

$curso = "PHP";

function MostrarCurso (){
    global $curso;
    echo $curso;
}
MostrarCurso();