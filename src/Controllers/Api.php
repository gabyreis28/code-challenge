<?php

namespace Src\Controllers;

class Api
{
  public function store($data, $test = false)
  {
    /*
     * Obter o corpo da solicitação em JSON
     */
    $json = file_get_contents('php://input');

    /*
     * Validação do corpo da requisição se for um teste
     */
    $body = $test ? $data : json_decode($json, true);

    $apiResult = [];
    $totalLitersWall = 0;

    foreach ($body as $data) {
      $wall = $data['wall'];
      $height = $data['height'];
      $width = $data['width'];
      $amountWindow = isset($data['amountWindow']) ? $data['amountWindow'] : 0;
      $amountDoor = isset($data['amountDoor']) ? $data['amountDoor'] : 0;

      $totalAreaWall = $height * $width;
      $totalAreaDoor = CHALLENGE["door_area"] * $amountDoor;
      $totalAreaWindow = CHALLENGE["window_area"] * $amountWindow;
      $totalAreaDoorWindow = $totalAreaDoor + $totalAreaWindow;
      $validAreaTotal = $totalAreaWall / 2;
      $totalWall = ($totalAreaWall - $totalAreaDoorWindow) / 5;

      if ($totalAreaWall < CHALLENGE["min"] || $totalAreaWall > CHALLENGE["max"]) {
        die(json_encode(["wall" => $wall, "error" => "Parede fora do tamanho, não pode ser menor que 1m ou maior que 15m."]));
      }

      if ($totalAreaDoorWindow >= $validAreaTotal) {
        die(json_encode(["wall" => $wall, "error" => "O total de área das portas e janelas deve ser no máximo 50% da área de parede."]));
      }

      if ($amountDoor && $height - CHALLENGE["door_height"] < 0.3) {
        die(json_encode(["wall" => $wall, "error" => "Altura da parede deve ser 30cm maior que altura da porta."]));
      }

      $totalLitersWall += $totalWall;
    }

    /*
     * Adicionar objeto liters na variável apiResult. 
     */
    array_push($apiResult, ["liters" => round($totalLitersWall)]);

    foreach (CHALLENGE["cans"] as $resultCans) {
      $value = $totalLitersWall / $resultCans["liters"];
      $result = $value > round($value) ? round($value) + 1 : round($value);

      array_push($apiResult, [
        "id" => $resultCans["id"],
        "value" => $resultCans["liters"],
        "amount_cans" => $result
      ]);
    }

    /*
     * Se for um teste permanecer os dados apiResult em array, 
     * do contratio converte os dados em json.
     */
    $apiResponse = $test ? $apiResult : print_r(json_encode($apiResult));

    return $apiResponse;
  }
}
