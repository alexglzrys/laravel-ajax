$(document).ready(function() {
    // Ocultar el mensaje de información
    $("#alert").hide();

    $(".btn-eliminar").click(function(event) {
        event.preventDefault();

        if (
            !confirm("¿Deseas eliminar del sistema el producto seleccionado?")
        ) {
            return false;
        }

        let $row = $(this).parents("tr");
        let $form = $(this).parents("form");
        let url = $form.attr("action");

        $.ajax({
            method: "DELETE",
            // Necesario para enviar los campos ocultos de _method y _token
            data: $form.serialize(),
            url: url
        })
            .done(function(data) {
                // La fila implicada la ocultamos, si el usuario refresca, ese registro realmente ya no existe y no se volverá a mostrar en el DOM
                $row.fadeOut();
                $("#alert")
                    .show()
                    .html(data.message);
                $("#total").html(data.total);
            })
            .fail(function(xhr) {
                $("#alert")
                    .show()
                    .html(xhr.responseText);
                // IMPORTANTE: xhr.responseText muestra el error real del servidor. No hacer esto en desarrollo provoca muchas horas de desesperación.
            });
    });
});
