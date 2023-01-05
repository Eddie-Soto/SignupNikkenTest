@extends('layout.base')
@section('contenido')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="head-line">
                    <h5 class="" style="font-weight:bold">Si ya has iniciado el proceso de incorporación utiliza</h5>
                    <button class="mb-2 mr-2 btn-icon btn-pill btn btn-outline-danger"><i
                            class="fa-solid fa-arrow-rotate-left btn-icon-wrapper mr-2"> </i><strong> Retormar
                            Incorporación</strong></button>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <section class="content" style="padding: 0">
                                <input type="hidden" id="url" value="{{ asset('') }}">
                                <div class="container-fluid">

                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="body">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-12 logo-container">
                                                            <img src="{{ asset('admin/img/logonikken.png') }}"
                                                                alt="Logo" class="img-fluid logo">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <nav aria-label="breadcrumb">
                                                                <ol class="breadcrumb breadcrumb-arrow p-0">
                                                                    <li class="breadcrumb-item"><a href="#"
                                                                            class="text-uppercase pl-3">Inicio</a></li>
                                                                    <li class="breadcrumb-item pl-0"><a href="#"
                                                                            class="text-uppercase">Registro</a></li>
                                                                </ol>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="head-body  col-12">
                                                            <p class="">Para poder hacer tu inscripción, debes
                                                                completar el siguiente formulario, el cual te permitirá ser
                                                                parte de NIKKEN</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="head-body col-12">
                                                            <p class="">Los campos marcados con * son obligatorios
                                                                para generar la incorporación.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-center mt-5 bold">
                                                            <p class="texto-solicitante">SOLICITANTE</p>
                                                        </div>
                                                    </div>
                                                    <hr class="divisor">
                                                    <form action="" enctype="multipart/form-data" id="incorporacion">
                                                        <div class="form-group">
                                                            <span style="color: red !important;">*</span>
                                                            <label for="country"
                                                                style="font-size: 1.2rem;color:#7C829C">País</label>
                                                            <select class="form-control" id="country" name="country"
                                                                required>
                                                                <option selected disabled>México</option>
                                                            </select>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="head-body  col-12">
                                                                <p class="font-weight-normal" id="txt-type-inc">Si has
                                                                    seleccionado
                                                                    Influencer, y desarrollarás el Negocio, elige algunas de
                                                                    estas opciones de tipo de persona según sea tu caso!</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="bulgy-radios col-12 d-lg-flex d-md-flex-colum mb-3 mt-3 align-items-md-center justify-content-beetwen"
                                                                role="radiogroup" aria-labelledby="bulgy-radios-label">
                                                                <label class="radio-inline col-lg-6 col-md-12">
                                                                    <input type="radio" name="type_inc" id="type_inc_ci"
                                                                        value="1" checked
                                                                        onchange="text_type_inc(1)" />
                                                                    <span class="radio"></span>
                                                                    <span class="label">Influencer</span>
                                                                </label>
                                                                <label class="radio-inline col-lg-6 col-md-12">
                                                                    <input type="radio" name="type_inc" id="type_inc_cb"
                                                                        value="0" onchange="text_type_inc(0)" />
                                                                    <span class="radio"></span>
                                                                    <span class="label">Club de Bienestar</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h2 class="mb-3 text-green pb-5 text-center"><span
                                                                        class="font-weight-normal">Únete a esta gran
                                                                        comunidad de bienestar</span></h2>

                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="position-relative text-center">
                                                                            <a href=""
                                                                                onclick="Tracking('ES - Miembro NIKKEN');"
                                                                                target="_blank">
                                                                                <img src="https://nikkenlatam.com/site/custom/img/general/logo-miembro-nikken.png"
                                                                                    class="img-fluid"
                                                                                    alt="Logo miembro NIKKEN"
                                                                                    title="Miembro NIKKEN">
                                                                                <p class="h4 mb-5 md-sm-8"
                                                                                    style="color: black">Vive la
                                                                                    experiencia <span class="d-block">del
                                                                                        bienestar
                                                                                        NIKKEN</span></p>
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="position-relative text-center">
                                                                            <a href=""
                                                                                onclick="Tracking('ES - Influencer de Bienestar');"
                                                                                target="_blank">
                                                                                <img src="https://nikkenlatam.com/site/custom/img/general/logo-influencer-bienestar-nikken.png?2.0.0"
                                                                                    alt="Logo Influencer de Bienestar NIKKEN"
                                                                                    class="img-fluid"
                                                                                    title="Influencer de Bienestar NIKKEN">
                                                                                <p class="mt-4 pt-3 h4 mb-5 md-sm-8"
                                                                                    style="color: black;">
                                                                                    Comparte y obtén <span
                                                                                        class="d-block">mayores
                                                                                        beneficios</span></p>
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12" id="kits">
                                                                <label for="kit"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Selecciona Tu Kit de
                                                                        Inicio</b></label>
                                                                <select class="form-control" name="kit"
                                                                    id="kit" required>
                                                                    <option value="">Selecciona un Kit de
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
                                                                        DELUXE $7,918.00</option>
                                                                </select>
                                                               
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4 mt-4">
                                                            <div class="facturas col-12 d-flex">
                                                                <label for="" class="mr-3"
                                                                    style="font-weight: bold">¿Deseas
                                                                    factura?</label>
                                                                <input type="checkbox" data-toggle="toggle"
                                                                    data-on="SI" data-off="NO" data-onstyle="success"
                                                                    data-offstyle="danger" id="invoice"
                                                                    onchange="check_invoice()" />

                                                            </div>
                                                        </div>
                                                        <div class="container text-invoice mb-4 ml-1" id="text-invoice"
                                                            style="">
                                                            <div class="row">
                                                                <h6 style="font-weight: bold">ESTIMADO INFLUENCER:</h6>
                                                                <p style="font-weight: bold">Te recordamos que por
                                                                    disposición oficial de la nueva
                                                                    <span
                                                                        style="color:rgb(110, 10, 10);font-weight:bold">Reforma
                                                                        Fiscal
                                                                        2022</span>, es necesario que
                                                                    actualices tu constancia fiscal para que podamos emitir
                                                                    tus
                                                                    facturas de manera correcta.
                                                                </p>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <button type="button" class="btn mr-2 mb-2 btn-info"
                                                                        data-toggle="modal"
                                                                        data-target="#modal_constancia"
                                                                        onclick="modal_constancia()">
                                                                        Cargar Constancia
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6" id="div_type_per">
                                                                <label for="type_per"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Tipo de Persona</b></label>
                                                                <select id="type_per" name="type_per"
                                                                    class="form-control" required>
                                                                    <option value="" selected></option>
                                                                    <option value="1">Persona Física</option>

                                                                    <option value="0">Persona Moral</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="margin-top: 1rem; margin-bottom: 1rem"
                                                            id="div_name">
                                                            <div class="col-md-6">
                                                                <label for="name_titular"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Nombre del Titular</b></label>
                                                                <input type="text" id="name_titular"
                                                                    name="name_titular" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="date_born"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Fecha de Nacimiento</b></label>
                                                                {{-- <input type="text" id="date_born" name="date_born"
                                                                    data-min="1930-01-01" data-max="2019-11-01"
                                                                    class="form-control"> --}}
                                                                <input class="form-control input-mask"
                                                                    data-inputmask-alias="datetime"
                                                                    data-inputmask-inputformat="dd/mm/yyyy"
                                                                    data-inputmask-placeholder="dd/mm/yyyy"
                                                                    im-insert="false" type="date" name="date_born"
                                                                    id="date_born" onblur="validate_birthday()" required>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="margin-top: 1rem; margin-bottom: 1rem"
                                                            id="div_last_name">
                                                            <div class="col-md-6">
                                                                <label for="name_titular_ape"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Primer Apellido del Titular</b></label>
                                                                <input type="text" id="name_titular_ape"
                                                                    name="name_titular_ape" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-6" id="jur2">
                                                                <label for="name_titular_ape_sec"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Segundo Apellido del Titular</b></label>
                                                                <input type="text" id="name_titular_ape_sec"
                                                                    name="name_titular_ape_sec" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row" id="div_razon_social"
                                                            style="margin-top: 1rem; margin-bottom: 1rem">
                                                            <div class="col-md-12">
                                                                <label for="razon_social"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Razón Social</b></label>
                                                                <input type="text" id="razon_social"
                                                                    name="razon_social" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 1rem; margin-bottom: 1rem">
                                                            <div class="col-md-6" id="mail">
                                                                <label for="email"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Correo electrónico</b></label>
                                                                {{-- <input type="text" id="email" name="email"
                                                                    onblur="validateMail()" class="form-control"> --}}
                                                                <input class="form-control input-mask-trigger"
                                                                    id="email" data-inputmask="'alias': 'email'"
                                                                    im-insert="true" inputmode="email" name="email"
                                                                    required placeholder="correo@dominio.com">
                                                                {{-- <input class="form-control"
                                                                    id="email" name="email" required placeholder="correo@dominio.com"> --}}
                                                            </div>

                                                            <div class="col-md-6" id="gender">
                                                                <label for="gender"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>Género</b></label>
                                                                <select id="gender1" name="gender"
                                                                    class="form-control valid" aria-invalid="false"
                                                                    required>
                                                                    <option value="">Selecciona Tu Genero</option>
                                                                    <option value="M">Masculino</option>
                                                                    <option value="F">Femenino</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="margin-top: 1rem; margin-bottom: 1rem">
                                                            <div id="cel_natural" class="col-md-6">
                                                                <label for="celular"><b><span
                                                                            style="color: red !important;">*</span>Teléfono
                                                                        Movil</b></label>
                                                                <input type="tel" id="celular" name="celular"
                                                                    class="form-control" minlength="10" maxlength="10"
                                                                    required placeholder="10 Dígitos">
                                                            </div>
                                                            <div class="col-md-6" id="div_rfc">
                                                                <label for="rfc"><b><span
                                                                            style="color: red !important;">*</span>RFC</b></label>
                                                                <input type="text" id="rfc" name="rfc"
                                                                    minlength="10" maxlength="13" class="form-control"
                                                                    placeholder="XAXX010101000" required>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="margin-top: 1rem; margin-bottom: 1rem"
                                                            id="div_reg_fisc">
                                                            <div id="div_reg_fiscal" class="col-md-6">
                                                                <label for="reg_fiscal"><b><span
                                                                            style="color: red !important;">*</span>Régimen
                                                                        Fiscal</b></label>
                                                                <input type="text" id="reg_fiscal" name="reg_fiscal"
                                                                    class="form-control">
                                                            </div>
                                                            <div id="div_cfdi" class="col-md-6">
                                                                <label for="cfdi"><b><span
                                                                            style="color: red !important;">*</span>Uso de
                                                                        CFDI</b></label>
                                                                <input type="text" id="cfdi" name="cfdi"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="address_invoice">
                                                            <div class="row mt-5 mb-3 ">
                                                                <div class="col-4">
                                                                    <label for="">
                                                                        <b>Dirección de Facturación</b></label>
                                                                </div>
                                                            </div>
                                                            <div class="row"
                                                                style="margin-top: 1rem; margin-bottom: 1rem"
                                                                id="div_address">
                                                                <div class="col-md-3">
                                                                    <label for="postal_code"> <span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Código Postal</b></label>
                                                                    <input type="text" id="codigo_postal_factura"
                                                                        name="codigo_postal_factura" class="form-control">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label for="adress"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Calle</b></label>
                                                                    <input type="text" id="calle_factura"
                                                                        name="calle_factura" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="region"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Estado</b></label>
                                                                    <select id="estado_factura" name="estado_factura"
                                                                        class="form-control">

                                                                        <option value="" selected="">Selecciona
                                                                            una
                                                                            opción</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label for="ciudad"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Municipio</b></label>
                                                                    <select id="municipio_factura"
                                                                        name="municipio_factura" class="form-control">

                                                                        <option value="0">Seleciona una opción
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="comuna"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Colonia</b> </label>
                                                                    <select id="colonia_factura" name="colonia_factura"
                                                                        class="form-control">

                                                                        <option value="0">Seleciona una opción
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row mt-5 mb-3 ">
                                                            <div class="col-4">
                                                                <label for="">
                                                                    <b>Dirección de Envío</b></label>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4 mt-4" id="btn-address_invoice">
                                                            <div class="facturas col-12 d-flex">
                                                                <label for="" class="mr-3"><b>Deseo ocupar mi
                                                                        misma dirección de facturación</b></label>
                                                                <input type="checkbox" checked data-toggle="toggle"
                                                                    data-on="NO" data-off="SI" data-onstyle="danger"
                                                                    data-offstyle="success" id="check_invoice_address"
                                                                    checked onchange="validate_invoice_address()" />
                                                            </div>
                                                        </div>

                                                        <div id="address_div" class="mb-3 mt-3">
                                                            <div class="row"
                                                                style="margin-top: 1rem; margin-bottom: 1rem"
                                                                id="div_address">
                                                                <div class="col-md-3">
                                                                    <label for="postal_code"> <span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Código Postal</b></label>
                                                                    <input type="text" id="codigo_postal"
                                                                        minlength="5" maxlength="5"
                                                                        name="codigo_postal" class="form-control"
                                                                        onblur="search_cp($(this).val())">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label for="adress"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Calle</b></label>
                                                                    <input type="text" id="calle" name="calle"
                                                                        class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="region"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Estado</b></label>
                                                                    <select id="estado" name="estado"
                                                                        class="form-control" disabled>

                                                                        <option value="" selected="">Selecciona
                                                                            una
                                                                            opción</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label for="ciudad"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Municipio</b></label>
                                                                    <select id="municipio" name="municipio"
                                                                        class="form-control" disabled>

                                                                        <option value="0">Seleciona una opción
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="colonia"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Colonia</b> </label>
                                                                    <select id="colonia" name="colonia"
                                                                        class="form-control" disabled>

                                                                        <option value="0" disabled selected>Seleciona
                                                                            una opción
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex flex-column p-3"
                                                            style="margin-top: 1rem; margin-bottom: 1rem">
                                                            <div>
                                                                <label for="file-es"><span
                                                                        style="color: red !important;">*</span>
                                                                    <b>COMPROBANTE DE IDENTIFICACIÓN (AMBOS LADOS)</b>
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <p style="font-size: 12px; color: red !important;"><i
                                                                        class="fa-solid fa-triangle-exclamation"></i> Solo
                                                                    se admiten
                                                                    archivos con extención JPG,JPEG,PNG y PDF.</p>
                                                            </div>
                                                            <div>
                                                                <p style="font-size: 12px; color: red !important;">
                                                                    <span style="color: red !important;"
                                                                        class="flaticon-warning"></span>El tamaño
                                                                    maximo del archivo es de 5MB
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 d-flex flex-column">

                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-12">
                                                                <div class="file-loading">
                                                                    <input id="file-es" name="file-es[]" type="file"
                                                                        multiple required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" align="center">
                                                            <div class="col-lg-12">
                                                                <div class="alert alert-dismissible fade show"
                                                                    role="alert"
                                                                    style="color: #fff; background-color: #00b1f4 !important;border-color: #00b1f4 !important;">
                                                                    <strong>
                                                                        <div class="custom-control custom-checkbox mr-3">
                                                                            <input type="checkbox" data-toggle="toggle"
                                                                                data-on="SI" data-off='NO'
                                                                                data-onstyle="success"
                                                                                id="accept_cotitular"
                                                                                onchange="check_cotitular()" />
                                                                            <br>
                                                                            <label class="mt-2">Deseo incorporarme con un
                                                                                Cotitular</label>
                                                                        </div>
                                                                    </strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="div_cotitular">
                                                            <div class="row"
                                                                style="margin-top: 1rem; margin-bottom: 1rem"
                                                                id="div_address">
                                                                <div class="col-md-8">
                                                                    <label for="postal_code"> <span
                                                                            style="color: red !important;">*</span>
                                                                        <b>Nombre Completo Cotitular</b></label>
                                                                    <input type="text" id="name_cotitular"
                                                                        name="name_cotitular" class="form-control">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="adress"><span
                                                                            style="color: red !important;">*</span>
                                                                        <b>No. de Identificación</b></label>
                                                                    <input type="text" id="number_document_cotitular"
                                                                        name="number_document_cotitular"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-sm-12">
                                                                <label id="option-sponsor-one"><input type="radio"
                                                                        id="type_sponsor_opc1" value="1"
                                                                        name="type_sponsor" checked>&nbsp;<strong>Me
                                                                        voy a
                                                                        registrar con un Asesor de Bienestar
                                                                        Independiente</strong><br><small>Conocí NIKKEN a
                                                                        través
                                                                        de un Asesor de Bienestar y me voy a incorporar bajo
                                                                        su código.</small></label>
                                                                <div class="row"
                                                                    style="margin-top: 1rem; margin-bottom: 1rem">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="code-sponsor" id="code-sponsor"
                                                                                placeholder="Ingresa aquí el código aquí"
                                                                                onkeyup="search_sponsor($(this).val())">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div id="view-name-sponsor"
                                                                            class="margin-sponsor">
                                                                            <ul id="lista-sponsor">
                                                                                {{-- <li>https://fontawesome.com/icons/triangle-exclamation?s=solid&f=classic</li>
                                                                                    <li>https://fontawesome.com/icons/triangle-exclamation?s=solid&f=classic</li>
                                                                                    <li>https://fontawesome.com/icons/triangle-exclamation?s=solid&f=classic</li> --}}
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row" style="margin-top: 1rem; margin-bottom: 1rem">
                                                            <div class="col-sm-12">
                                                                <label id="option-sponsor-three"><input type="radio"
                                                                        value="3" name="type_sponsor"
                                                                        id="option-sponsor-2">&nbsp;<strong>Supe de
                                                                        NIKKEN a través del sitio
                                                                        Web</strong><br><small>Conocí Nikken al
                                                                        visitar su página web o a través de una
                                                                        búsqueda en internet y estoy muy
                                                                        interesado(a) en unirme a la
                                                                        comunidad.</small></label>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="row" align="center">
                                                    <div class="col-lg-12">
                                                        <div class="alert alert-dismissible fade show" role="alert"
                                                            style="color: #fff; background-color: #00b1f4 !important;border-color: #00b1f4 !important;">
                                                            <strong>
                                                                <div class="custom-control custom-checkbox mr-3">
                                                                    <input type="checkbox" data-toggle="toggle"
                                                                        data-on="SI" data-off='NO'
                                                                        data-onstyle="success" id="accept_contract" onchange="validate_save()"/>
                                                                    <br>
                                                                    <label class="mt-2"><a href=""
                                                                            style="text-decoration:none;color:white">ACEPTO
                                                                            LOS TÉRMINOS DE
                                                                            ESTE CONTRATO</a> </label>
                                                                </div>
                                                            </strong>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" align="center">
                                                    <div class="col-lg-12">
                                                        <div class="alert alert-dismissible fade show" role="alert"
                                                            style="color: #fff; background-color: #00b1f4 !important;border-color: #00b1f4 !important;">
                                                            <strong>
                                                                <div class="custom-control custom-checkbox mr-3">
                                                                    <input type="checkbox" data-toggle="toggle"
                                                                        data-on="SI" data-off='NO'
                                                                        id="accept_politics" data-onstyle="success" onchange="validate_save()"/>
                                                                    <br>
                                                                    <label class="mt-2"><a href=""
                                                                            style="text-decoration:none;color:white">ACEPTO
                                                                            LA POLÍTICA DE
                                                                            PRIVACIDAD</a> </label>
                                                                </div>
                                                            </strong>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" align="center">
                                                    <div class="col-lg-12">
                                                        <div class="alert alert-dismissible fade show" role="alert"
                                                            style="color: #fff; background-color: #00b1f4 !important;border-color: #00b1f4 !important;">
                                                            <strong>
                                                                <div class="custom-control custom-checkbox mr-3">
                                                                    <input type="checkbox" data-toggle="toggle"
                                                                        data-on="SI" data-off='NO'
                                                                        data-onstyle="success" id="accept_info" onchange="validate_save()"/>
                                                                    <br>
                                                                    <label class="mt-2">DECLARO QUE LA
                                                                        INFORMACIÓN PROPORCIONADA ES VERDADERA,
                                                                        CORRECTA Y COMPLETA A MI MEJOR SABER Y
                                                                        ENTENDER</label>
                                                                </div>
                                                            </strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <button
                                                            class="btn-wide mb-2 mr-2 btn-icon btn-icon-right btn-shadow btn-pill btn btn-outline-success btn-lg"
                                                            type="submit" id="btn_save_form" disabled>Guardar<i
                                                                class="fa-regular fa-floppy-disk ml-2"></i></button>
                                                    </div>
                                                </div>
                                                </form>

                                                <div class="row">
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-5">
                                                        <center>
                                                            <a class="img-responsive flotante" target="_blank"
                                                                href="https://wa.me/51989079782"><img
                                                                    src="http://signupnikkentest.test/regchileasset/img/whatsapp1.jpg"
                                                                    border="0"></a>
                                                        </center>
                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </section>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
@section('modal')
    <div class="modal fade" id="modal_constancia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_constancialabel">Cargar Constancia Fiscal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="upload_constancia_form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="up_fiscal container form-group">
                            <div class="row col-6 mb-3" id="upload_one">
                                <p class="ml-2" style="font-weight: bold;color:rgb(110, 10, 10)">Elige el tipo de
                                    Persona
                                </p>
                                <select class="form-control form-select-sm" id="choose_type_person"
                                    aria-label=".form-select-sm example" name="type_person_modal">
                                    <option selected disabled value="0">Tipo de Persona</option>
                                    <option value="1">Persona Física</option>
                                    <option value="2">Persona Moral</option>
                                </select>
                            </div>
                            <div id="div_upload_two">
                                <p class="ml-2" style="font-weight: 500">Sube aquí tu archivo de constancia Fiscal
                                    emitido por el SAT (No se
                                    aceptan
                                    fotos
                                    de impresiones escaneadas o convertidas en PDF).
                                    El archivo que se adjunta deberás bajarlo de la plataforma del SAT (Únicamente
                                    archivos
                                    digitales).
                                </p>
                                <input type="file" name="myfile" id="myfile" />
                                <input type="hidden" name="url_constancia" id="url_constancia">
                                <input type="hidden" name="type_person_selected" id="type_person_selected">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success" id="btn_validar_constancia"
                        onclick="upload_constancia()">Validar Constancia</button>
                </div>
            </div>
        </div>
    </div>
    <div class="body-block-example-1 d-none">
    @endsection

    @section('script')
        <script src="{{ asset('admin/js/mexico.js') }}"></script>
        <script>
            // const labels = document.querySelectorAll('.label');
            // labels.forEach(label => {
            //     const chars = label.textContent.split('');
            //     label.innerHTML = '';
            //     chars.forEach(char => {
            //         label.innerHTML += `<span>${char === ' ' ? '&nbsp' : char}</span>`;
            //     });
            // });

            $('#file-es').fileinput({
                theme: 'fa5',
                language: 'es',
                // uploadUrl: '#',
                showClose: false,
                showCaption: false,
                showBrowse: false,
                showUpload: false,
                zoomIcon: false,
                browseOnZoneClick: true,
                allowedFileExtensions: ['jpg', 'png', 'pdf']
            });
        </script>
    @endsection
