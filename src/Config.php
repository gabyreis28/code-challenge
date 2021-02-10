<?php

define("SITE", [
  "root" => "http://localhost",
  "name" => "Calculadora de tinta",
  "desc" => "Com a calculadora de tinta você consegue estimar quanto vai precisar para a pintura de uma área. Você precisa ter em mãos as medidas das quatro paredes e o número de portas e janelas por parede. Preencha os campos indicados e clique no botão calcular.",
  "author" => "Gabriela Dias Reis"
]);

define("CHALLENGE", [
  "min" => 1,
  "max" => 15,
  "door_height" => 1.9,
  "door_width" => 0.8,
  "door_area" => 1.52,
  "window_height" => 2.0,
  "window_width" => 1.2,
  "window_area" => 2.4,
  "cans" => [
    [
      "id" => 1,
      "liters" => 0.5
    ],
    [
      "id" => 2,
      "liters" => 2.5
    ],
    [
      "id" => 3,
      "liters" => 3.6
    ],
    [
      "id" => 4,
      "liters" => 18
    ]
  ]
]);
