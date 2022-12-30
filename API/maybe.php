<?php
$tab = file_get_contents("../prova.json");
header("Content-Type: application/json");
echo $tab;