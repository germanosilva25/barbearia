<?php
echo "<pre>";
print_r($_POST);

$inicio = strtotime($_POST['horario_inicio']);
$final = strtotime($_POST['horario_saida_intervelo']);
$mins = ($inicio - $final) / 60;

if($mins < 0)
    $mins = $mins*(-1);
//echo $mins;

$qnt_de_agendamento = $mins/30;

//echo "<br> qnt: $qnt_de_agendamento";
$acumulado = $inicio;

echo "<h1>Geração de agendamentos do primeiro horário!</h1>";
for($i = 0; $i < $qnt_de_agendamento; $i++){

    echo "\n Criado agendamento no horario para: " . date('H:i', $acumulado);
    $acumulado = $acumulado + 1800;
}




$inicio = strtotime($_POST['horario_volta_intervela']);
$final = strtotime($_POST['horario_fim']);
$mins = ($inicio - $final) / 60;

if($mins < 0)
    $mins = $mins*(-1);
//echo $mins;

$qnt_de_agendamento = $mins/30;

//echo "<br> qnt: $qnt_de_agendamento";
$acumulado = $inicio;

echo "<h1>Geração de agendamentos do segundo horário!</h1>";
for($i = 0; $i < $qnt_de_agendamento; $i++){

    echo "\n Criado agendamento no horario para: " . date('H:i', $acumulado);
    $acumulado = $acumulado + 1800;
}