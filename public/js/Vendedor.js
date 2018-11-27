$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/vendedor/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml += "<tr><td>" + val.vencodigo + "</td><td>" + val.vennome + "</td> <td>" + val.vencpf + "</td> <td>" + val.venemail + "</td><td> <a onclick='deletar(" + val.vencodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;
      });
    };

    $("#confirmar").click(function() {
      let codigo   = $("#vencodigo").val(),
          nome  = $("#vennome").val(),
          cpf  = $("#vencpf").val(),
          email   = $("#venemail").val();

      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:8000/api/vendedor/",
        data: JSON.stringify ({vencodigo: codigo, vennome : nome, vencpf : cpf, venemail: email}),
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
            url: "http://localhost:8000/api/vendedor/"+ codigo,
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