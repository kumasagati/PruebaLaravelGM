$(document).ready(function() {
    //#region Category

    // Validacion e insercion de una categoria por AJAX
    $("form#form_add_cat").submit(function(e) {
        e.preventDefault();
        $("#validation_results").html(
            "<div class='alert alert-warning'>Validando informacion, espere un momento...</div>"
        );

        $.ajax({
            url: route("categories.store"),
            type: "POST",
            data: $(this).serialize(),
            success: obj => {
                $("#validation_results").html(obj.mensaje);

                if (obj.resultado === "1") {
                    location.href = route("categories.index");
                }
            },
            error: data => {
                if (data.status == 422) {
                    var errores = data.responseJSON.errors;
                    mostrarErrores(errores);
                }
            }
        });
    });

    //Validacion y actualizacion de una Categoria por AJAX
    $("form#form_update_cat").submit(function(e) {
        e.preventDefault();
        $("#validation_results").html(
            "<div class='alert alert-warning'>Validando informacion, por favor espere...</div>"
        );

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: $(this).serialize(),
            success: obj => {
                $("#validation_results").html(obj.mensaje);

                if (obj.resultado == "1") {
                    location.href = route("categories.index");
                }
            },
            error: data => {
                if (data.status == "422") {
                    var errores = data.responseJSON.errors;
                    mostrarErrores(errores);
                }
            }
        });
    });

    $("#alert").hide();
    // Eliminacion de una Categoria por AJAX
    $(".btn-delete-cat").click(function(e) {
        e.preventDefault();

        if (!confirm("¿Esta seguro de eliminar la categoria?")) {
            return false;
        }

        var row = $(this).parents("tr");
        var form = $(this).parents("form");
        var url = form.attr("action");

        $("#alert").show();

        $.post(url, form.serialize(), data => {
            row.fadeOut();
            $("#alert").html(data.mensaje);
        }).fail(() => {
            $("#alert").html("Algo ha salido mal.");
        });
    });

    //#endregion

    //#region Medicine

    //Validacion e insercion de un medicamento por AJAX
    $("form#form_add_med").submit(function(e) {
        e.preventDefault();

        $("#validation_results").html(
            "<div class='alert alert-warning'>Validando informacion, espere un momento...</div>"
        );

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            cache: false,
            success: obj => {
                $("#validation_results").html(obj.mensaje);
                console.log(obj);

                if (obj.resultado == "1") {
                    location.href = route("medicines.index");
                }
            },
            error: data => {
                console.log(data);

                if (data.status == "422") {
                    var errores = data.responseJSON.errors;
                    mostrarErrores(errores);
                }
            }
        });
    });

    // Validacion y Actualizacion de un medicamento por AJAX
    $("form#form_update_med").submit(function(e) {
        e.preventDefault();

        $("#validation_results").html(
            "<div class='alert alert-warning'>Validando informacion, espere un momento...</div>"
        );

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            cache: false,
            success: obj => {
                $("#validation_results").html(obj.mensaje);
                console.log(obj);

                if (obj.resultado == "1") {
                    location.href = route("medicines.index");
                }
            },
            error: data => {
                console.log(data);

                if (data.status == "422") {
                    var errores = data.responseJSON.errors;
                    mostrarErrores(errores);
                }
            }
        });
    });

    $("#alert").hide();

    // Eliminicaion de un Medicamento por AJAX
    $(".btn-delete-med").click(function(e) {
        e.preventDefault();

        if (!confirm("¿Esta seguro de eliminar el medicamento?")) {
            return false;
        }

        var row = $(this).parents(".col-md-6");
        var form = $(this).parents("form");
        var url = form.attr("action");

        $("#alert").show();

        $.post(url, form.serialize(), data => {
            row.fadeOut();
            $("#alert").html(data.mensaje);
        }).fail(data => {
            $("#alert").html("Algo ha salido mal.");

            console.log(data);
        });
    });

    //#endregion
});

//#region Users

// Validacion e insercion de un usuario
$("form#form_register").submit(function(e) {
    e.preventDefault();
    $("#validation_results").html(
        "<div class='alert alert-warning'>Validando informacion, por favor espere...</div>"
    );

    $.ajax({
        url: $(this).attr("action"),
        type: "POST",
        data: $(this).serialize(),
        success: obj => {
            $("#validation_results").html(obj.mensaje);

            if (obj.resultado == "1") {
                location.href = route("inicio");
            }
        },
        error: data => {
            if (data.status == "422") {
                var errores = data.responseJSON.errors;
                mostrarErrores(errores);
            }
        }
    });
});

// Validacion y logueo de un usuario
$("form#form_login").submit(function(e) {
    e.preventDefault();
    $("#validation_results").html(
        "<div class='alert alert-warning'>Validando informacion, por favor espere...</div>"
    );

    $.ajax({
        url: $(this).attr("action"),
        type: "POST",
        data: $(this).serialize(),
        success: obj => {
            $("#validation_results").html(obj.mensaje);

            if (obj.resultado == "1") {
                location.href = route("inicio");
            }
        },
        error: data => {
            console.log(data);

            if (data.status == "422") {
                var errores = data.responseJSON.errors;
                mostrarErrores(errores);
            }
        }
    });
});

//#endregion

// Funcion que evita que los multiclick en el submit de un formulario
var isSend = false;
function checkSubmit() {
    if (!isSend) {
        isSend = true;
        return true;
    } else {
        return false;
    }
}

// Funcion que muestra los errores de validacion retornados por el servidor.
function mostrarErrores(errores) {
    $("#validation_results").empty();
    $("#validation_results").html("<div class='alert alert-danger'></div>");
    $.each(errores, (i, error) => {
        $(".alert-danger").append("<p>" + error[0] + "</p>");
    });
}
