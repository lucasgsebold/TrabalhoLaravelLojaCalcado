$(document).ready(function() {
  buscaDados();

  function buscaDados() {
    $.getJSON("http://localhost:8000/api/venda/", function(data, status) {
      var sHtml = "";
      $.each(data, function(key, val) {
        sHtml += "<tr><td>" + val.vendacodigo + "</td><td>" + val.vendadata + "</td> <td>" + val.vendaformapag + "</td> <td>" + val.clicodigo + "</td><td>" + val.vencodigo + "</td><td>" + val.calcodigo + "</td><td> <a onclick='deletar(" + val.vendacodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
      });

      document.getElementById("tabela").innerHTML = sHtml;
    });
  };

  $("#confirmar").click(function() {
    let codigo   = $("#vendacodigo").val(),
        data  = $("#vendadata").val(),
        pagamento  = $("#vendaformapag").val(),
        cliente   = $("#clicodigo").val();
        vendedor   = $("#vencodigo").val();
        calcado   = $("#calcodigo").val();

    //enviado
    $.ajax({
      type: "POST",
      url: "http://localhost:8000/api/venda/",
      data: JSON.stringify ({vendacodigo: codigo, vendadata :data, vendaformapag : pagamento, clicodigo: cliente, vencodigo: vendedor, calcodigo: calcado}),
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
          url: "http://localhost:8000/api/venda/"+ codigo,
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