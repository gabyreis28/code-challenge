<?php

use PHPUnit\Framework\TestCase;
use Src\Controllers\Api;

class ApiTest extends TestCase
{
  public function testRequestApi()
  {
    $apiRequest = new Api();

    /*
     * Chamar a função store da API e setando os dados em array
     */
    $response = $apiRequest->store([
      [
        "wall" => "1",
        "height" => "2.3",
        "width" => "6",
        "amountDoor" => "2",
        "amountWindow" => "0"
      ]
    ], true);
    
    /*
     * Validar teste:
     * 1 - Se o resultado é um array;
     * 2 - Se a quantidade de objeto response seja 5;
     * 3 - Se a key liters é do tipo numérico;
     * 4 - Se o resultado da response é igual ao valor esperado;
     */
    $this->assertIsArray($response);
    $this->assertCount(5, $response);
    $this->assertIsNumeric($response[0]["liters"]);
    $this->assertEquals(["liters" => "2"], ["liters" => $response[0]["liters"]]);
  }
}
