@extends('adminlte::page')

@section('content_header')
<h1>Exámenes</h1>
<div>
<section>
    <div container>
        <div class="modal fade" id="registroExamenes" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog modg-scrollable" role="document">
                <div class="modal-content">
                    <div class="card-header bg-succses">
                        <div class="card-title text-center">
                            <div class="nav">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="nav-item active">
                                      <a class="nav-link active" aria-controls="#registro" data-toggle="tab" role="tab" aria-current="page" href="#registro">Registro</a>
                                    </li>
                                    <li role="presentation" class="nav-item">
                                      <a class="nav-link" aria-controls="#registro2" data-toggle="tab" role="tab" href="#registro2">Valores Referencia</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="registro">
                                <form id="registroExamenes" method="POST" action="">

                                    <input type="hidden" value="" id="" name="" />

                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Nombres:</span>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre " >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Categoría:</span>
                                                <select name="select" class="form-control">
                                                    <option value="value1" selected >Bioquimica</option>
                                                    <option value="value2" >Quimica</option>
                                                </select>
                                            </div>
                                           </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Laboratorio:</span>
                                            <select name="select" class="form-control">
                                                <option value="value1" selected >San Pablo</option>
                                                <option value="value2" >Medilav</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Formato:</span>
                                            <select name="select" class="form-control">
                                                <option value="value1" selected >1111</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Unidad de Medida:</span>
                                            <input type="text" class="form-control" id="medida" name="medida" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Precio 1:</span>
                                            <input type="number" class="form-control" id="precio1" name="precio1" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Precio 2:</span>
                                            <input type="number" class="form-control" id="precio2" name="precio2" >
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="registro2">
                                <form id="registroPaciente" method="POST" action="">

                                    <input type="hidden" value="" id="" name="" />

                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef1" name="valRef1" placeholder="Valor de referencia 1" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef2" name="valRef2" placeholder="Valor de referencia 2" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef3" name="valRef3" placeholder="Valor de referencia 3" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef4" name="valRef4" placeholder="Valor de referencia 4" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef5" name="valRef5" placeholder="Valor de referencia 5" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef6" name="valRef6" placeholder="Valor de referencia 6" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef7" name="valRef7" placeholder="Valor de referencia 7" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef8" name="valRef8" placeholder="Valor de referencia 8" >
                                        </div>
                                    </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Guardar</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div container>
        <div class="modal fade" id="actualizaExamenes" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog modg-scrollable" role="document">
                <div class="modal-content">
                    <div class="card-header bg-succses">
                        <div class="card-title text-center">
                            <div class="nav">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="nav-item active">
                                      <a class="nav-link active" aria-controls="#registro3" data-toggle="tab" role="tab" aria-current="page" href="#registro3">Registro</a>
                                    </li>
                                    <li role="presentation" class="nav-item">
                                      <a class="nav-link" aria-controls="#registro4" data-toggle="tab" role="tab" href="#registro4">Valores Referencia</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="registro3">
                                <form id="registroExamenes" method="POST" action="">

                                    <input type="hidden" value="" id="" name="" />

                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Nombres:</span>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre " >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Categoría:</span>
                                                <select name="select" class="form-control">
                                                    <option value="value1" selected >Bioquimica</option>
                                                    <option value="value2" >Quimica</option>
                                                </select>
                                            </div>
                                           </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Laboratorio:</span>
                                            <select name="select" class="form-control">
                                                <option value="value1" selected >San Pablo</option>
                                                <option value="value2" >Medilav</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Formato:</span>
                                            <select name="select" class="form-control">
                                                <option value="value1" selected >1111</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Unidad de Medida:</span>
                                            <input type="text" class="form-control" id="medida" name="medida" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Precio 1:</span>
                                            <input type="number" class="form-control" id="precio1" name="precio1" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Precio 2:</span>
                                            <input type="number" class="form-control" id="precio2" name="precio2" >
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="registro4">
                                <form id="registroPaciente" method="POST" action="">
                                     <input type="hidden" value="" id="" name="" />

                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef1" name="valRef1" placeholder="Valor de referencia 1" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef2" name="valRef2" placeholder="Valor de referencia 2" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef3" name="valRef3" placeholder="Valor de referencia 3" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef4" name="valRef4" placeholder="Valor de referencia 4" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef5" name="valRef5" placeholder="Valor de referencia 5" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef6" name="valRef6" placeholder="Valor de referencia 6" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef7" name="valRef7" placeholder="Valor de referencia 7" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef8" name="valRef8" placeholder="Valor de referencia 8" >
                                        </div>
                                    </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="site-section bg-white " id="testimonials-section" data-aos="fade">
    <div class="container">
        <h1 class="text-center"></h1>
        <div class="row">

                <div class="card-header btn-succses">
                    <div class="card-title text-center">


            <div class="card" style="width:1000px">
                <div class="card-header btn-succses">
                    <div class="card-title text-center">

                        <button type="button" class=" btn btn-outline-primary ml-auto float-left" data-toggle="modal" data-target="#registroExamenes">Nuevo</button>
                    </div>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <table id="tablaLHistorialP" class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Id Examen</th>
                                    <th>Nombres de Examen</th>
                                    <th>Categoría</th>
                                    <th>Laboratorio</th>
                                    <th>Formato</th>
                                    <th>Unidad de Medida</th>
                                    <th>Precio 1</th>
                                    <th>Precio 2</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            nnnnnn
                                        </td>
                                        <td>
                                            nnnnnn
                                        </td>
                                        <td>
                                            nnnnnn
                                        </td>
                                        <td>
                                            nnnnnn
                                        </td>
                                        <td>
                                            nnnnnn
                                          </td>
                                        <td>
                                            nnnnnn
                                        </td>
                                        <td>
                                            nnnnnn
                                        </td>
                                        <td>
                                            <form name="eliminarHistorialM" action="/eliminarHistorial" method="POST">
                                                <input type="hidden" value="<%= item.external_id%>" id="externalDelete" name="externalDelete">
                                                <div class="btn-group">
                                                    <a href="#" data-toggle="modal" data-target="#actualizaExamenes" data-tooltip="tooltip" data-placement="top" title="Editar" class=" btn-info btn-sm" onclick="llenaDatosHistorial('')">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                        <path fill-rule="evenodd" d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                                    </svg>
                                                        <i class="far fa-edit"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="submit" class="btn btn-sm ">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z"/>
                                                    </svg>
                                                </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
