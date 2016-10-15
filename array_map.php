<?php

$colors = ['red', 'blue', 'maroon', 'silver', 'teal'];

$names = ['gepetto', 'stella', 'juliet', 'maximus', 'samir', 'linny'];

$animals = ['cat', 'dog', 'rat', 'bird', 'monkey'];

$result = array_map(
    function ($color, $name, $animal) {
        return $color . ' - ' . $name . ' - ' . $animal;
    },
    $colors,
    $names,
    $animals
);

print_r($result);