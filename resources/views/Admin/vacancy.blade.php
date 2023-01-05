@extends('layout.menu')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        {{-- <div class="page-title-icon">
                            <i class="pe-7s-graph text-success"></i>
                        </div> --}}
                        <div>
                            Creación de Vacantes
                            <div class="page-title-subheading">
                                Aqui podrá crear la solicitud para el proceso de contratación.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <section class="content">
                                <input type="hidden" id="url" value="{{ asset('') }}">
                                <div class="container-fluid">

                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="body">
                                                <div class="table-responsive">
                                                    <div class="col-6 mb-3 p-2">
                                                        <button class="mb-2 mr-2 btn-icon btn-pill btn btn-outline-success"
                                                            data-toggle="modal" data-target="#myModal"><i
                                                                class="pe-7s-add-user btn-icon-wrapper"> </i>Crear
                                                            Vacante</button>
                                                    </div>

                                                    <table style="width: 100%"
                                                        class=" js-exportable table table-bordered table-striped table-hover dataTable"
                                                        id="Module_table">
                                                        <thead>
                                                            <td>Acciones</td>
                                                            <td>Vacante</td>
                                                            <td>País</td>
                                                            <td>Home Office</td>
                                                            <td>Postulaciones</td>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th style="display: flex; justify-content:space-evenly"><i
                                                                        class="fa-solid fa-trash-can btn"></i><i
                                                                        class="fa-regular fa-square-check btn"></i></th>
                                                                <th>Operador de Almacén</th>
                                                                <th>México</th>
                                                                <th>NO</th>
                                                                <th>2</th>
                                                            </tr>
                                                            <tr>
                                                                <th style="display: flex; justify-content:space-evenly"><i
                                                                        class="fa-solid fa-trash-can btn"></i><i
                                                                        class="fa-regular fa-square-check btn"></i></th>
                                                                <th>Desarrollador Web</th>
                                                                <th>México</th>
                                                                <th>SI</th>
                                                                <th>4</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
    {{-- MODAL CREAR MODULO --}}
    <div class="modal fade" id="myModal" tabindex="-1" data-backdrop="static" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Crear Vacante</h3>
                </div>
                <div class="modal-body">

                    <div class="input-group">
                        <form action="" method="post" id="form-create">
                            @csrf

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name_vacancy" id="name_vacancy"
                                                placeholder="Nombre del puesto" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="1" name="description" id="description" class="form-control autosize-input"
                                                placeholder="Por favor escriba una descripción"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="switch">
                                                <h4 class="card-inside-title">Home Office? </h4>
                                                <input type="checkbox" checked data-toggle="toggle" data-on="SI"
                                                    data-off="NO" data-onstyle="success" data-offstyle="danger" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="form-group">
                                            <h4 class="card-inside-title">País </h4>

                                            <select name="country" id="select_country" class="form-control show-tick">
                                                <option value="0" selected disabled>--Por favor elija una opción
                                                </option>
                                                <option value="1">Colombia</option>
                                                <option value="2">México</option>
                                                <option value="3">Perú</option>
                                                <option value="4">Ecuador</option>
                                                <option value="5">Panamá</option>
                                                <option value="6">Guatemala</option>
                                                <option value="7">El Salvador</option>
                                                <option value="8">Costa Rica</option>
                                                <option value="10">Chile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-10 mb-3 mt-3">
                                        <h4 class="mb-3">Área</h4>
                                        <select class="form-control custom-select">
                                            <option value="0" selected disabled>--Por favor elija una opción</option>
                                            <optgroup label="Logística">
                                                <option value="AK">Reparto</option>
                                                <option value="HI">Almácen</option>
                                            </optgroup>
                                            <optgroup label="IT">
                                                <option value="CA">Sistemas</option>
                                                <option value="NV">Marketing</option>
                                                <option value="OR">Infraestructura</option>
                                            </optgroup>
                                            <optgroup label="Factor Humano">
                                                <option value="CA">Reclutadora</option>
                                                <option value="NV">Nominas</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="col-10 mb-3 mt-3">
                                        <div>
                                            <div class="custom-radio custom-control custom-control-inline">
                                                <input type="radio" name="type_vacancy" id="type_vacancy"
                                                    class="custom-control-input" />
                                                <label class="custom-control-label" for="type_vacancy">Nueva
                                                    Posición</label>
                                            </div>
                                            <div class="custom-radio custom-control custom-control-inline">
                                                <input type="radio" name="type_vacancy" id="type_vacancy2"
                                                    class="custom-control-input" />
                                                <label class="custom-control-label" for="type_vacancy2">Cubrir
                                                    Vacante</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="imagen" name="image" value="ruta/imagen">
                            <input type="hidden" id="id_int" name="module">
                            <input type="hidden" id="id_template" name="id_plantilla">
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <input type="button" value="Crear" class="btn btn-primary" id="btn_crearModule">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin/js/vacancy.js') }}"></script>
@endsection
