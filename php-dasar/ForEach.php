<?php

$names = ["Dito", "Aryaputra", "Ramadhani"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

$person = [
    "first_name" => "Dito",
    "middle_name" => "Aryaputra",
    "last_name" => "Ramadhani",
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
