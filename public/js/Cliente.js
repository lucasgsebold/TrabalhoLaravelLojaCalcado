$(document).ready(function() {
  buscaDados();

  function buscaDados() {
    $.getJSON("http://localhost:8000/api/cliente/", function(data, status) {
      var sHtml = "";
      $.each(data, function(key, val) {
        sHtml += "<tr><td>" + val.clicodigo + "</td><td>" + val.clinome + "</td> <td>" + val.clicpf + "</td> <td>" + val.cliidade + "</td><td>" + val.cliemail + "</td> <td><a onclick='deletar(" + val.clicodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
      });

      document.getElementById("tabela").innerHTML = sHtml;
    });
  };

  $("#confirmar").click(function() {
    let iCodigo   = $("#clicodigo").val(),
        sNome     = $("#clinome").val(),
        sCpf      = $("#clicpf").val(),
        sDataNasc = $("#cliidade").val(),
        sEmail   = $("#cliemail").val();

    //enviado
    $.ajax({
      type: "POST",
      url: "http://localhost:8000/api/cliente/",
      data: JSON.stringify ({clicodigo: iCodigo, clinome : sNome, clicpf : sCpf, cliidade: sDataNasc, cliemail: sEmail}),
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

function deletar(iCodigo) {
  if(!iCodigo) {

  } else {
      //enviado
      $.ajax({
          type: "DELETE",
          url: "http://localhost:8000/api/cliente/"+ iCodigo,
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