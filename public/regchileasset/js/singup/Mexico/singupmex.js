$(document).ready(function () {
    console.log("ready! in Mexico");
    // $('#type_per').val(0);
    $("#text-invoice").hide();
    $("#upload_constancia").hide();
    //   console.log($('#url').val());
});

$("input[name='invoice']").change(function () {
    if ($(this).val() == "SI") {
        $("#text-invoice").show();
        $("#upload_constancia").show();
    } else {
        $("#text-invoice").hide();
        $("#upload_constancia").hide();
    }
});

$("#check_invoice_address").change(function () {
    if ($("#check_invoice_address").prop("checked")) {
        $("#adress_invoice_div").hide();
    } else {
        $("#adress_invoice_div").show();
    }
});

function upload_constancia() {
    base_url = $("#url").val();
    var parametros = new FormData($("#upload_constancia_form")[0]);

    $.ajax({
        data: parametros,
        url: base_url + "upload_constancia",
        type: "POST",
        contentType: false,
        processData: false,
        beforeSend: function () {},
        success: function (response) {
            console.log(response);
            // console.log(response.data);
            // datos = JSON.parse(response.data);
            // console.log(datos);
            datos = JSON.parse(response);
            // console.log(datos.RFC);
            if (datos.RFC != "") {
                $("#upload_modal").modal("hide");
                // alert(response.link);
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Su constancia fue cargada correctamente",
                    showConfirmButton: false,
                    timer: 1500,
                });
                // call_api_fiscal(response.link);
                $("#name_titular").val(datos.nombre);
                $("#rfc").val(datos.RFC);
                $("#name_titular_ape").val(datos.apellido1);
                $("#name_titular_ape_sec").val(datos.apellido2);
                $("#postal_code").val(datos.cp);
                $("#region").val(datos.estado);
                $("#region").change();
                $("#ciudad").val(datos.municipio);
                $("#ciudad").change();
                $("#reg_fiscal").val(datos.regimen);
                $("#cfdi").val(datos.actividadEconomica);
                $("#adress").val(datos.calle + " " + datos.numero);
                $("#ciudad").val(datos.municipio);
                $("#ciudad").val(datos.municipio);
                $("#ciudad").val(datos.municipio);
            }
        },
    });
}

// function call_api_fiscal(url){
//     base_url='https://cmsnikken.nikkenlatam.com/apiDataFiscalPDF?t=fisica&f='

//     $.ajax({
//         url : base_url + url,
//         type : 'GET',
//         beforeSend: function(){

//         },
//         success: function(response){
//             datos = JSON.parse(response);
//             alert(datos);

//         }
//     });
// }

$("#show_modal_constancia").on("click", function () {
    // $('#upload_modal').modal('show');
    $("#upload_modal").modal("show");
});
