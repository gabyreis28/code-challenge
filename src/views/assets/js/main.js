$(function () {
  /*
   * Os campos com a classe from-control aceita apenas valores numéricos
   */
  $(".form-control").inputmask(
    {
      alias: "numeric",
      allowMinus: false,
      autoUnmask: true,
      rightAlign: false,
      unmaskAsNumber: true,
      defaultValue: "0",
    },
    "Regex",
    { regex: "^[0-9]{1,6}(\\.\\d{1,2})?$" }
  );

  /*
   * Consumir API 
   */
  const requestApi = (data) => {
    $.ajax({
      type: "POST",
      url: "http://localhost/api",
      contentType: "application/json",
      dataType: "json",
      data: JSON.stringify(data),
      cache: false,
      success: function (response) {
        /*
         * Se tiver error retornar mensagem na tela
         */
        if (response.error) {
          const errorHtml = $(`#error-${response.wall}`);

          errorHtml[0].removeAttribute("hidden");

          return errorHtml.text(response.error);
        }

        /*
         * Imprimir os resultados no modal 
         */
        $("#modal-title").text(
          `Total parede em litros: ${response[0].liters} L.`
        );

        for (let i = 0; i < 5; i++) {
          response.slice(1, response.length);

          $(`#title-${response[i].id}`).html(`Lata de ${response[i].value} L.`);
          $(`#liter-${response[i].id}`).html(
            `Necessário ${response[i].amount_cans} latas.`
          );
        }

        $("#modal-home").modal("show");
      },
    });
  };

  /*
   * Coletar todos os valores das paredes e enviar para a requisição API
   */
  $("#calcular").on("click", () => {
    const input = [];

    for (let i = 1; i < 5; i++) {
      const wall = i.toString();
      const width = $(`#width-${i}`).val();
      const height = $(`#height-${i}`).val();
      const amountDoor = $(`#door-${i}`).val();
      const amountWindow = $(`#window-${i}`).val();

      input.push({ wall, width, height, amountDoor, amountWindow });
    }

    requestApi(input);
  });
});

/*
 * Limpar mensagem de error 
 */
const checkChange = (data) => {
  const [_, wallIdSeleted] = data.getAttribute("id").split("-");
  const error = $(`#error-${wallIdSeleted}`)[0];

  error.setAttribute("hidden", "true");
};
