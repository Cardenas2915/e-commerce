<?php


date_default_timezone_set("America/Cayenne");

function Español(){

    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_year = date("Y");

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"

    ];

    $meses_year = [

        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio"

    ];

    $fecha_final = $dia_semana[date("l")]. " " . $fecha_dia. " de " . $meses_year[$fecha_mes]. " de " . $fecha_year;

    return $fecha_final;

}

echo Español();


