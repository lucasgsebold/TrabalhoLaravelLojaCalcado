$(document).ready(function() {
  buscaDados();

  function buscaDados() {
    $.getJSON("http://localhost:8000/api/calcado/", function(data, status) {
      var sHtml = "";
      $.each(data, function(key, val) {
        sHtml += "<tr><td>" + val.calcodigo + "</td><td>" + val.calmarca + "</td> <td>" + val.caltamanho + "</td> <td>" + val.calquantidade + "</td><td>" + val.calvalor + "</td><td> <a onclick='deletar(" + val.calcodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
      });

      document.getElementById("tabela").innerHTML = sHtml;
    });
  };

  $("#confirmar").click(function() {
    let codigo   = $("#calcodigo").val(),
        marca  = $("#calmarca").val(),
        tamanho  = $("#caltamanho").val(),
        quantidade   = $("#calquantidade").val();
        valor = $("#calvalor").val();

    //enviado
    $.ajax({
      type: "POST",
      url: "http://localhost:8000/api/calcado/",
      data: JSON.stringify ({calcodigo: codigo, calmarca : marca, caltamanho : tamanho, calquantidade: quantidade, calvalor: valor}),
      success: function(data) {
        alert("Cadastrado com Sucesso!");
      },
      contentType: "application/json",
      dataType: "json"
    }).then(res => {
      alert('Cadastro realizado com sucesso!');
      buscaDados();
    });
  });
});


function deletar(codigo) {
  if(!codigo) {

  } else {
      //enviado
      $.ajax({
          type: "DELETE",
          url: "http://localhost:8000/api/calcado/"+ codigo,
          success: function(data) {
          alert("Excluido com Sucesso!");
          window.location.reload();
          },
          contentType: "application/json",
          dataType: "json"
      }).then(res => {
          $("#buscar").click();
      });
  }
}