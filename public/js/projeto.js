function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    if (confirm("Deseja confirmar a exclusão?")) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                id: idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function (data) {
            $.unblockUI();
            if (data.success == true) {
                window.location.reload();
            } else {
                alert('Não foi possivel excluir.');
            }
        }).fail(function (data) {
            $.unblockUI();
            alert("Não foi possível buscar os dados");
        });
    }
}

$(document).ready(function() {
    $('#mascara_valor').mask('#.##0,00', { reverse: true });
  });