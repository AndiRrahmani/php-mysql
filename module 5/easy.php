<?php
$employees = [
    [
        "name" => "Andi",
        "age" => 15,
        "position" => "Engineer"
    ],
    [
        "name" => "Anik",
        "age" => 16,
        "position" => "Manager"
    ],
    [
        "name" => "Erion",
        "age" => 14,
        "position" => "CEO"
    ]
];


foreach ($employees as $employee) {
    echo "Name: " . $employee["name"]  ;
    echo "Age: " . $employee["age"]  ;
    echo "Position: " . $employee["position"] ;
    echo ;
}

?>