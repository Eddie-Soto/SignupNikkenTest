$(document).ready(function () {
    console.log("ready! in Mexico");
    // $('#type_per').val(0);
    //   $("#text-invoice").hide();
    //   $("#upload_constancia").hide();
    //   console.log($('#url').val());
    $("#text-invoice").hide();
    $("#address_invoice").hide();
    $("#div_reg_fiscal").hide();
    $("#div_cfdi").hide();
    $("#btn-address_invoice").hide();
    $("#div_cotitular").hide();
    $("#div_razon_social").hide();
});

// $('#toggle-one').change(function(){
//     console.log($('#toggle-one').prop('checked'));
// })

function validate_birthday() {
    //console.log($('#date_born').val());
    dateborn = $("#date_born").val();
    if (dateborn != "") {
        $.ajax({
            url: "validate_dateborn",
            type: "GET",
            data: { dateborn },
            // dataType: "json",
            success: function (resp) {
                edad = parseInt(resp);

                if (edad < 18) {
                    Swal.fire({
                        icon: "error",
                        title: "Lo sentimos...",
                        text: "Debes de ser mayor de edad para incorporarte a NIKKEN.",
                        // footer: '<a href="">Why do I have this issue?</a>'
                    });
                }
                if (edad > 80) {
                    Swal.fire({
                        icon: "error",
                        title: "Lo sentimos...",
                        text: "Por favor revisa que tu fecha de nacimiento sea correcta.",
                        // footer: '<a href="">Why do I have this issue?</a>'
                    });
                }
            },
        });
    }
}

function check_invoice() {
    // console.log($("#invoice").prop("checked"));
    if ($("#invoice").prop("checked")) {
        $("#text-invoice").show();
        $("#address_invoice").show();
        $("#div_reg_fiscal").show();
        $("#div_cfdi").show();
        $("#btn-address_invoice").show();
    } else {
        $("#text-invoice").hide();
        $("#address_invoice").hide();
        $("#div_reg_fiscal").hide();
        $("#div_cfdi").hide();
        $("#btn-address_invoice").hide();
    }
}

function check_cotitular() {
    //console.log($("#accept_cotitular").prop("checked"));
    if ($("#accept_cotitular").prop("checked")) {
        $("#div_cotitular").show();
    } else {
        $("#div_cotitular").hide();
    }
}

function modal_constancia() {
    $("#btn_validar_constancia").hide();
    $("#choose_type_person").val(0);
    $("#chooste_type_person").change();
    $("#myfile").val("");
}

$("#choose_type_person").change(function () {
    $("#btn_validar_constancia").show();
});

$("input[name =type_sponsor]").change(function () {
    // console.log($(this).val());
    if ($(this).val() == 1) {
        $("#code-sponsor").prop("disabled", false);
    } else {
        $("#code-sponsor").prop("disabled", true);
        $("#code-sponsor").val("");
    }
});

function validate_invoice_address() {
    if ($("#check_invoice_address").prop("checked")) {
        //Verde
        $("#address_div").show();
    } else {
        //Rojo
        $("#address_div").hide();
    }
}

function get_colony_names(province = "", state = "", country = 0,postal_code = 0) {
    $.ajax({
        url: "/get_colony",
        type: "GET",
        data: { province, state, country ,postal_code},
        // dataType: "json",
        success: function (resp) {
            // $('#colonia').prop('disabled',false);
            console.log(resp);
            if (resp.status == 200 || resp.status == 201) {
              //  if(resp.status == 201){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-right",
                        iconColor: "white",
                        customClass: {
                            popup: "colored-toast",
                        },
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                    });
            
                    Toast.fire({
                        icon: "error",
                        title: "Su C.P. no se encuentra en la base de SEPOMEX por favor elija manualmente su colonia.",
                    });
              //  }
                resp.info.forEach((element) => {
                    $("#colonia_factura").append(
                        $("<option>", {
                            value: element.colony_code,
                            text: element.colony_name,
                        })
                    );
                });
                $("#colonia_factura").change();
            }
            if (resp.status == 300) {
                Swal.fire({
                    icon: "error",
                    title: "Lo sentimos...",
                    text: "Ocurrió un error, por favor intenté de nuevo",
                });
            }

        },
    });
}

function search_cp(postal_code) {
    if (postal_code != "" && postal_code.length == 5) {
        $.ajax({
            url: "/search_cp",
            type: "GET",
            data: { postal_code },
            // dataType: "json",
            success: function (resp) {
                console.log(resp);
                if (resp.status == 200) {
                    //console.log(resp.info.province_name);
                    // $('#estado').prop('disabled',false);
                    $("#estado").append(
                        $("<option>", {
                            value: resp.info[0].state_code,
                            text: resp.info[0].state_name,
                        })
                    );
                    $("#estado").val(resp.info[0].state_name);
                    $("#estado").change();
                    //$('#municipio').prop('disabled',false);
                    $("#municipio").append(
                        $("<option>", {
                            value: resp.info[0].province_code,
                            text: resp.info[0].province_name,
                        })
                    );
                    $("#municipio").val(resp.info[0].province_name);
                    $("#municipio").change();

                    if (typeof resp.info[1] != "undefined") {
                        //alert('tiene dos colonias');
                        $("#colonia").prop("disabled", false);
                        resp.info.forEach((element) => {
                            $("#colonia").append(
                                $("<option>", {
                                    value: element.colony_code,
                                    text: element.colony_name,
                                })
                            );
                        });
                        $("#colonia").change();
                        $("#colonia").focus();
                    } else {
                        $("#colonia").append(
                            $("<option>", {
                                value: resp.info[0].colony_code,
                                text: resp.info[0].colony_name,
                            })
                        );
                        $("#colonia").val(resp.info[0].colony_name);
                        $("#colonia").change();
                    }
                } else if (resp.status == 300) {
                    Swal.fire({
                        icon: "error",
                        title: "Lo sentimos...",
                        text: "Por favor revise que su código postal sea correcto. Puede validar su código en la página de SEPOMEX. En dado caso que su código si aparezca en SEPOMEX por favor comuniquesé con Atención al Cliente.",
                        footer: '<a href="https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/Descarga.aspx" target="_blank">Ir a SEPOMEX</a>',
                    });
                }
                // if (edad < 18) {
                //     Swal.fire({
                //         icon: "error",
                //         title: "Lo sentimos...",
                //         text: "Debes de ser mayor de edad para incorporarte a NIKKEN.",
                //         // footer: '<a href="">Why do I have this issue?</a>'
                //     });
                // }
                // if (edad > 80) {
                //     Swal.fire({
                //         icon: "error",
                //         title: "Lo sentimos...",
                //         text: "Por favor revisa que tu fecha de nacimiento sea correcta.",
                //         // footer: '<a href="">Why do I have this issue?</a>'
                //     });
                // }
            },
        });
    }
    if (postal_code.length > 1 && postal_code.length < 5) {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-right",
            iconColor: "white",
            customClass: {
                popup: "colored-toast",
            },
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
        });

        Toast.fire({
            icon: "error",
            title: "Favor valide que su código postal este completo",
        });
    }
}

function text_type_inc(flag) {
    if (flag == 1) {
        $("#txt-type-inc").text(
            "Si has seleccionado Influencer, y desarrollarás el Negocio, elige algunas de estas opciones de tipo de persona según sea tu caso!"
        );
        $('#kit').empty();
        $('#kit').append(`<option value="" selected disabled>Selecciona un Kit de
        inicio</option>
    <option value="5023">5023 KIT INFLUENCER + PI WATER +
        EXPO CONCIENCIA $4,301.00</option>
    <option value="5024">5024 KIT INFLUENCER + PIMAG
        WATERFALL + EXPO CONCIENCIA $8,166.00</option>
    <option value="5025">5025 KIT INFLUENCER PAQUETE PI
        WATER + OPTIMIZER $11,811.00
    </option>
    <option value="5026">5026 KIT INFLUENCER PAQUETE
        WATERFALL + OPTIMIZER $15,676.00</option>
    <option value="5027">5027 KIT INFLUENCER  + PIMAG
        OPTIMIZER $7,910.00</option>
    <option value="5028">5028 KIT INFLUENCER AQUA POUR
        DELUXE $7,918.00</option>`);
    } else {
        $('#kit').empty();
        $('#kit').append(`<option value="" selected disabled>Selecciona un Kit de
        inicio</option>
    <option value="5031">5031 KIT MIEMBRO DE LA COMUNIDAD $0.00</option>
    <option value="5032">5032 KIT APARTADO $800.00</option>`);
        $("#txt-type-inc").text(
            "Si eres Empresa y no desarrollarás Negocio, debes registrarte como Club de Bienestar ( Recibes factura)."
        );
    }
}

function search_sponsor(sponsor) {
    if (sponsor != "") {
        $.ajax({
            url: "/search_sponsor",
            type: "GET",
            data: { sponsor },
            // dataType: "json",,
            beforeSend: function () {
                // cancelPreviousAjaxCall();
            },
            success: function (resp) {
                console.log(resp);
                if (resp.status == 200) {
                    $("#lista-sponsor").empty();
                    resp.info.forEach((element) => {
                        $("#lista-sponsor").append(`<li>
                        <button class="btn btn-info btn-sm" onclick="insert_sponsor(${element.codigo})">${element.codigo}</button><p style="font-weight:bold">${element.nombre}</p>
                        </li>`);
                    });
                } else {
                    $("#lista-sponsor").empty();
                    $("#lista-sponsor").append(`<li>
                       <p style="font-weight:bold">El Código o Nombre no existe</p>
                        </li>`);

                    // location.reload();
                }
            },
        });
    } else {
        $("#lista-sponsor").empty();
    }
}

function insert_sponsor(sponsor) {
    $("#code-sponsor").val(sponsor);
    $("#lista-sponsor").empty();
}

function upload_constancia() {
    var parametros = new FormData($("#upload_constancia_form")[0]);
    type_person = $("#choose_type_person").val();
    if ($("#myfile").val() != "") {
        $.ajax({
            data: parametros,
            url: "upload_constancia",
            type: "POST",
            contentType: false,
            processData: false,
            beforeSend: function () {
                $(".close").click();
                let timerInterval;
                Swal.fire({
                    title: "Espere por favor!",
                    html: "Se está validando su constancia",
                    timer: 60000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const b = Swal.getHtmlContainer().querySelector("b");
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft();
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    },
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Ocurrió un error, intente de nuevo.",
                        });
                    }
                });
            },
            success: function (response) {
                datos = JSON.parse(response);
                // console.log(datos);
                // console.log(datos.RFC);
                //console.log(type_person);
                if (typeof datos.RFC != "undefined") {
                    if (type_person == 1) {
                        $("#div_razon_social").hide();
                        $("#razon_social").prop("required", false);
                        $("#div_name").show();
                        $("#div_last_name").show();
                        $("#name_titular").prop("required", true);
                        $("#date_born").prop("required", true);
                        $("#name_titular_ape").prop("required", true);
                        $("#name_titular_ape_sec").prop("required", true);
                        $("#type_per").val(1);
                        $("#type_per").change();
                        $("#razon_social").val("");
                        $("#name_titular").val(datos.nombre);
                        $("#rfc").val(datos.RFC);
                        $("#name_titular_ape").val(datos.apellido1);
                        $("#name_titular_ape_sec").val(datos.apellido2);
                        $("#reg_fiscal").val(datos.regimen);
                        $("#cfdi").val(datos.actividadEconomica);
                        $("#codigo_postal_factura").val(datos.cp);
                        $("#celular").val("");
                        $("#calle_factura").val(
                            datos.calle + " " + datos.numero
                        );
                        $("#municipio_factura").append(
                            $("<option>", {
                                value: datos.municipio,
                                text: datos.municipio,
                            })
                        );
                        $("#municipio_factura").val(datos.municipio);
                        $("#municipio_factura").change();
                        $("#estado_factura").append(
                            $("<option>", {
                                value: datos.estado,
                                text: datos.estado,
                            })
                        );
                        $("#estado_factura").val(datos.estado);
                        $("#estado_factura").change();
                        get_colony_names(datos.municipio, datos.estado, 2,datos.cp);
                    }
                    if (type_person == 2) {
                        $("#type_per").val(0);
                        $("#type_per").change();
                        $("#div_razon_social").show();
                        $("#razon_social").prop("required", true);
                        $("#div_name").hide();
                        $("#name_titular").prop("required", false);
                        $("#date_born").prop("required", false);
                        $("#name_titular_ape").prop("required", false);
                        $("#name_titular_ape_sec").prop("required", false);
                        $("#div_last_name").hide();
                        $("#name_titular").val("");
                        $("#name_titular_ape").val("");
                        $("#name_titular_ape_sec").val("");
                        $("#rfc").val(datos.RFC);
                        $("#razon_social").val(datos.razonSocial);
                        $("#cfdi").val(datos.actividadEconomica);
                        $("#celular").val(datos.telefono);
                        $("#codigo_postal_factura").val(datos.cp);
                        $("#reg_fiscal").val(datos.regimen);
                        $("#calle_factura").val(
                            datos.calle + " " + datos.numero
                        );
                        $("#municipio_factura").append(
                            $("<option>", {
                                value: datos.municipio,
                                text: datos.municipio,
                            })
                        );
                        $("#municipio_factura").val(datos.municipio);
                        $("#municipio_factura").change();
                        get_colony_names(datos.municipio, datos.estado, 2,datos.cp);
                    }
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Su constancia fue cargada correctamente",
                        showConfirmButton: false,
                        timer: 1750,
                    });
                    // call_api_fiscal(response.link);
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Ocurrió un error, intente de nuevo.",
                    });
                }
            },
        });
    } else {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-right",
            iconColor: "white",
            customClass: {
                popup: "colored-toast",
            },
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
        });

        Toast.fire({
            icon: "error",
            title: "Favor de cargar su constancia y elegir el tipo de persona",
        });
    }
}

$("#choose_type_person").change(function () {
    $("#div_upload_two").show();
});



function validate_save(){

    if($('#accept_contract').prop('checked') && $('#accept_politics').prop('checked') && $('#accept_info').prop('checked') ){
        $('#btn_save_form').prop('disabled',false);
    }
    else{
        $('#btn_save_form').prop('disabled',true);
    }
 
}

function store(){
    $('#btn_save_form').prop('disabled',true);
    var parametros = new FormData($("#incorporacion")[0]);
    $.ajax({
        data: parametros,
        url: "/store",
        type: "POST",
        contentType: false,
        processData: false,
        beforeSend: function () {
            let timerInterval;
            Swal.fire({
                title: "Espere por favor!",
                html: "Se está guardando la información",
                timer: 60000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const b = Swal.getHtmlContainer().querySelector("b");
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft();
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                },
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    $('#btn_save_form').prop('disabled',false);
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Ocurrió un error, intente de nuevo.",
                    });
                }
            });
        },
        success: function (response) {
            if(resp.status == 200){
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Su incorporación fue creada correctamente.",
                    showConfirmButton: false,
                    timer: 1750,
                });
            }
            console.log(response);
        },
    });

}
//This is sort of CSS-only; the JS below just sticks a span around each letter, so i can animate each independantly.
//(oh for an :nth-letter selector!)
const labels = document.querySelectorAll(".label");
labels.forEach((label) => {
    const chars = label.textContent.split("");
    label.innerHTML = "";
    chars.forEach((char) => {
        label.innerHTML += `<span>${char === " " ? "&nbsp" : char}</span>`;
    });
});
