<?php $tab = file_get_contents("../prova.json");
$tab = json_decode($tab, true);

$newMaybe = [
    "mayBe" => $_POST["mayBe"]
];

$tab[] = $newMaybe;

$maybejson = json_encode($tab , JSON_PRETTY_PRINT);

file_put_contents("../prova.json", $maybejson);

header ( "Content-Type:  application/json" );

echo json_encode($newMaybe);

