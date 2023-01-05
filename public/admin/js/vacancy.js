
$(document).ready(function () {
    loadTable();
    $("#btn_edit_plantilla").hide();
});

// $("#btn_tst").on("click", function () {
//     var url = $("#url").val();
//     datos = { id: 4 };
//     dato = JSON.stringify(datos);
//     $.ajax({
//         url: url + "content/test",
//         type: "GET",
//         // data: { 'id': 5},
//         dataType: "json",
//         // data:{dato},
//         success: function (resp) {
//             resp = JSON.parse(resp);
//             console.log(resp);
//             // console.log(resp.menu[0].id_module);
//         },
//     });
// });

// function loadTable() {
//     var url = $("#url").val();
//     //Exportable table
//     $("#Module_table").DataTable().destroy();
//     $("#Module_table").DataTable({
//         dom: "Bfrtip",
//         responsive: true,
//         language: {
//             url: "https://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json",
//         },
//         buttons: [
//             // 'copy', 'csv', 'excel', 'pdf', 'print'
//         ],
//         beforeSend: function () {
//             cancelPreviousAjaxCall();
//         },
//         ajax: {
//             url: url + "content/datatable",
//             type: "GET",
//         },
//         columns: [
//             { data: "btn" },
//             { data: "name_module", className: "text-center" },
//             // { data: 'description',
//             // className: 'text-center' },
//             { data: "flag", className: "text-center" },
//             { data: "current_status", className: "text-center" },
//         ],
//     });
// }

// $("#Module_table").on("click", ".glyphicon-question-sign", function (e) {
//     e.preventDefault();
//     var url = $("#url").val();
//     let id = $(this).attr("data-id");
//     // console.log(id);

//     window.location.href = url + "questions/" + id;
// });

// $("#btn_Crear").on("click", function () {
//     // data-toggle="modal" data-target="#myModal"
//     jQuery.noConflict();
//     $("#myModal").modal("show");
//     $("#btn_crearModule").val("Crear");
//     $("#btn_crearModule").prop("disabled", false);
//     limpiar();
    
// });

// $("#Module_table").on("click", ".glyphicon-trash", function (e) {
//     var url = $("#url").val();
//     e.preventDefault();
//     let id = $(this).attr("data-id");

//     let id_int = parseInt(id);

//     Swal.fire({
//         title: "¿Estás seguro?",
//         text: "Estas a punto de eliminar el modulo",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Eliminar",
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 url: url + "content/dlt_module",
//                 type: "GET",
//                 data: { id: id_int },
//                 success: function (resp) {
//                     if (resp == "Correcto") {
//                         Swal.fire({
//                             position: "center",
//                             icon: "success",
//                             title: "El modulo fue eliminado correctamente",
//                             showConfirmButton: false,
//                             timer: 1500,
//                         });
//                         loadTable();
//                     } else {
//                         Swal.fire({
//                             icon: "error",
//                             title: "Oops...",
//                             text: "Ocurrió un error, intente de nuevo.",
//                         });
//                         loadTable();
//                     }
//                 },
//             });
//         }
//     });
// });

// $("#Module_table").on("click", ".fa-earth-americas", function (e) {
//     var url = $("#url").val();
//     e.preventDefault();
//     let id = $(this).attr("data-id");

//     let id_int = parseInt(id);

//     Swal.fire({
//         title: "¿Estás seguro?",
//         text: "Estas a punto de aprobar a productivo, una vez aprobado no podrás realizar cambios de ningún tipo",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Aprobar",
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 url: url + "content/update_productivo",
//                 type: "GET",
//                 data: { id: id_int },
//                 success: function (resp) {
//                     if (resp.status == 200) {
//                         Swal.fire({
//                             position: "center",
//                             icon: "success",
//                             title: "El modulo fue aprobado correctamente",
//                             showConfirmButton: false,
//                             timer: 1500,
//                         });
//                         loadTable();
//                     } else {
//                         Swal.fire({
//                             icon: "error",
//                             title: "Oops...",
//                             text: "Ocurrió un error, intente de nuevo.",
//                         });
//                         loadTable();
//                     }
//                 },
//             });
//         }
//     });
// });

// $("#Module_table").on("click", ".fa-file-arrow-up", function (e) {
//     e.preventDefault();
//     var url = $("#url").val();
//     let id = $(this).attr("data-id");
//     let id_int = parseInt(id);
//     window.location.href = url + "content/template/" + id;
// });

// $("#Module_table").on("click", ".glyphicon-eye-open", function (e) {
//     e.preventDefault();
//     var url = $("#url").val();
//     let id = $(this).attr("data-id");
//     // let url_complete = url + "content/template_view/" + id + "/" + id_template;
//     let url_complete = url + "content/template_view/" + id;
//     var win = window.open(url_complete, "_blank");
//     win.focus();
//     // window.location.href =
//     //     url + "content/template_view/" + id + "/" + id_template;
// });

// $("#Module_table").on("click", ".glyphicon-pencil", function (e) {
//     var url = $("#url").val();
//     e.preventDefault();
//     $("#btn_edit_plantilla").show();
//     $("#btn_crearModule").val("Guardar");
//     let id = $(this).attr("data-id");
//     $("#myModal").modal("show");
//     let id_int = parseInt(id);
//     $("#id_int").val(id_int);
//     $.ajax({
//         url: url + "content/detail_module",
//         type: "GET",
//         data: { id: id_int },
//         success: function (resp) {
//             if (resp.name_module) {
//                 $("#id_int").val(resp.id);
//                 $("#select_country").val(resp.country);
//                 $("#select_country").change();
//                 $("#name_module").val(resp.name_module);
//                 $("#description").val(resp.description);
//                 if (resp.status == 1) $("#status").prop("checked", true);
//                 if (resp.share_insta == 1)
//                     $("#md_checkbox_1").prop("checked", true);
//                 if (resp.share_wtsap == 1)
//                     $("#md_checkbox_10").prop("checked", true);
//                 if (resp.share_tw == 1)
//                     $("#md_checkbox_6").prop("checked", true);
//                 if (resp.share_fb == 1)
//                     $("#md_checkbox_5").prop("checked", true);
//             }
//         },
//     });
// });

// $("#btn_edit_plantilla").on("click", function () {});

// function limpiar() {
//     $("#name_module").val("");
//     $("#description").val("");
//     $("#select_country").val(-1);
//     $("#select_country").change();
//     $("#md_checkbox_10").prop("checked", false);
//     $("#md_checkbox_1").prop("checked", false);
//     $("#md_checkbox_6").prop("checked", false);
//     $("#md_checkbox_5").prop("checked", false);
//     $("#status").prop("checked", true);
// }

// function check(data) {
//     if (data == "on") {
//         return 1;
//     } else {
//         return 0;
//     }
// }

// $("#btn_crearModule").on("click", function (e) {
//     e.preventDefault();
//     var url = $("#url").val();

//     let id_int = $("#id_int").val();
//     let id = parseInt(id_int);
//     name_module = $("#name_module").val();
//     description = $("#description").val();
//     status1 = document.getElementsByName("status");
//     status1 = check(status1[0].value);
//     country = $("#select_country").val();
//     if ($("#md_checkbox_5").prop("checked")) {
//         share_fb = 1;
//     } else {
//         share_fb = 0;
//     }
//     if ($("#md_checkbox_6").prop("checked")) {
//         share_tw = 1;
//     } else {
//         share_tw = 0;
//     }
//     if ($("#md_checkbox_1").prop("checked")) {
//         share_insta = 1;
//     } else {
//         share_insta = 0;
//     }
//     if ($("#md_checkbox_10").prop("checked")) {
//         share_wtsap = 1;
//     } else {
//         share_wtsap = 0;
//     }
//     action = $("#btn_crearModule").val();
//     // console.log(action);
//     if (action == "Crear") {
//         if (name_module != "" && description != "" && country != "") {
//             // console.log("en el if");
//             id_template = $("#id_template").val();
//             $.ajax({
//                 type: "GET",
//                 url: url + "content/create_module",
//                 data: {
//                     name_module,
//                     description,
//                     status: status1,
//                     country,
//                     share_fb,
//                     share_insta,
//                     share_tw,
//                     share_wtsap,
//                     id_landing_page: id_template,
//                 }, 
//                 beforeSend: function () {
//                      $("#btn_crearModule").prop("disabled", true);
//                     let timerInterval;
//                     Swal.fire({
//                         title: "Cargando información ...",
//                         html: "Por favor espere",
//                         timer: 6000,
//                         timerProgressBar: true,
//                         didOpen: () => {
//                             Swal.showLoading();
//                             const b = Swal.getHtmlContainer().querySelector("b");
//                             timerInterval = setInterval(() => {
//                                 b.textContent = Swal.getTimerLeft();
//                             }, 100);
//                         },
//                         willClose: () => {
//                             clearInterval(timerInterval);
//                         },
//                     });
//                 },
//                 success: function (res) {
//                     // console.log(res);
//                     $("#btn_crearModule").prop("disabled", false);
//                     $("#id_int").val(res);
//                     if (res != "Error") {
//                         limpiar();
//                         Swal.fire({
//                             position: "center",
//                             icon: "success",
//                             title: "El modulo fue creado correctamente",
//                             showConfirmButton: false,
//                             timer: 1500,
//                         });

//                         window.location.href = url + "content/template/" + res;
//                     } else {
//                         Swal.fire({
//                             icon: "error",
//                             title: "Oops...",
//                             text: "Ocurrió un error, intente de nuevo.",
//                         });
//                     }
//                 },
//             });
//         }else{
//             Swal.fire({
//                 icon: "error",
//                 title: "Oops...",
//                 text: "Por favor llena toda la información solicitada",
//             });
//         }
//     } else {
//         // console.log("En el else");
//         $.ajax({
//             type: "GET",
//             url: url + "content/update_module",
//             data: {
//                 id,
//                 name_module,
//                 description,
//                 status: status1,
//                 country,
//                 share_fb,
//                 share_insta,
//                 share_tw,
//                 share_wtsap,
//             },
//             success: function (res) {
//                 // console.log("en el response");
//                 if (res == "Correcto") {
//                     Swal.fire({
//                         position: "center",
//                         icon: "success",
//                         title: "El modulo fue actualizado correctamente",
//                         showConfirmButton: false,
//                         timer: 1500,
//                     });

//                     $("#myModal").modal("hide");
//                     loadTable();
//                 } else {
//                     Swal.fire({
//                         icon: "error",
//                         title: "Oops...",
//                         text: "Ocurrió un error, intente de nuevo.",
//                     });
//                     $("#myModal").modal("hide");
//                     loadTable();
//                 }
//             },
//         });
//     }
// });

// $("#btn_plantilla_one").on("click", function () {
//     $("#id_template").val(1);
//     // console.log($("#id_template").val());
//     $("#card_two").hide();
//     $("#card_three").hide();
// });

// $("#btn_plantilla_two").on("click", function () {
//     $("#id_template").val(2);
//     $("#card_one").hide();
//     $("#card_three").hide();
// });

// $("#btn_plantilla_three").on("click", function () {
//     $("#id_template").val(3);
//     $("#card_two").hide();
//     $("#card_one").hide();
// });

// $("#btn_template").on("click", function () {
//     var url = $("#url").val();
//     let id = $("#id_int").val();
//     let id_int = parseInt(id);

//     $.ajax({
//         type: "GET",
//         url: url + "content/templates",
//         data: {
//             id_int,
//         },
//         success: function (res) {
//             if (res == "Correcto") {
//                 $("#form-create")[0].reset();
//                 limpiar();
//                 // Swal.fire({
//                 //     position: "center",
//                 //     icon: "success",
//                 //     title: "El modulo fue creado correctamente",
//                 //     showConfirmButton: false,
//                 //     timer: 1500,
//                 // });
//                 Swal.fire({
//                     title: "<strong>Curso Creado Correctamente</strong>",
//                     icon: "success",
//                     html:
//                         "Por favor, continue con la selección de su plantilla.<br> <br>" +
//                         '<a id = "btn_template" class = "btn btn-primary"> Asignar Plantilla</a>',
//                     showCloseButton: false,
//                     showCancelButton: false,
//                     showConfirmButton: false,
//                     // focusConfirm: true,
//                     // confirmButtonText: "Asignar Plantilla",
//                 }).then((result) => {
//                     if (result.isConfirmed) {
//                         window.location.href = url + "content/test";
//                     }
//                 });
//                 $("#Module_table").DataTable().ajax.reload();
//                 $("#myModal").modal("hide");
//             } else {
//                 Swal.fire({
//                     icon: "error",
//                     title: "Oops...",
//                     text: "Ocurrió un error, intente de nuevo.",
//                 });
//                 $("#Module_table").DataTable().ajax.reload();
//             }
//         },
//     });
// });


