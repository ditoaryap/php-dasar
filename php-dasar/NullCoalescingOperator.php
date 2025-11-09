<?php

// CARA KE 1
$data = [
    "action" => "Create",
];

// if (isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "Nothing";
// }

// echo $action . PHP_EOL;

$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;
