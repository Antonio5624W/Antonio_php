<?php
#SIRVE PARA DECLARAR BIEN LOS TYPOS QUE VA A RECIBIR LOS DATOS POR QUE SI NO
#PHP DETECTARA TODO COMO CORRECTO PERO A LA HORA DE EJECUTAR LA PAGINA
#DARA ERROR, ASI QUE ES MEJOR PONER TODO CON LOS TIPOS DECLARADOS 
declare(strict_types=1); //<- A NIVEL DE ARCHIVO Y ARRIBA DEL TODO


function render_template(string $complate, array $data = []) {
    extract($data);
    require "templates/$complate.php";
}

function get_data(string $url): array
{
    $result = file_get_contents(API_URL);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days == 0  => "Hoy se estrena!",
        $days == 1 => "Mañana se estrena",
        $days < 7 => "esta semana se estrena",
        $days < 30 => "Este mes se estrena...",
        default => "$days dias hasta el estreno",
    };
}
