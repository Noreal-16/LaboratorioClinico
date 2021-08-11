@extends('adminlte::page')

@section('content_header')
    <h1>Medicos</h1>
    <div>
        <div class="modal fade" id="modalRegistroMedico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Registro Medicos
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    </div>
                    <form id="registroMedico" method="POST" action="">

                            <input type="hidden" value="" id="" name="" />

                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-text">Nombre:</span>
                                        <input type="text" class="form-control" id="nombreMedico" name="nombreMedicoo" placeholder="Ingrese Nombre Medico" >
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-text">Observaciones:</span>
                                        <textarea type="text" rows="4" cols="20" class="form-control" id="observacion" name="observacion" placeholder="Ingrese Observaciones"> </textarea>
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
    </section>


    <section>
        <div class="modal fade" id="modalActualizaMedico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Actualizar Medico
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    </div>
                    <form id="actualizaMedico" method="POST" action="">
                        <input type="hidden" value="" id="" name="" />
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Nombre:</span>
                                <input type="text" class="form-control" id="nombreMedico" name="nombreMedicoo" placeholder="Ingrese Nombre Medico" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Observaciones:</span>
                                <textarea type="text" rows="4" cols="20" class="form-control" id="observacion" name="observacion" placeholder="Ingrese Observaciones"> </textarea>
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
    </section>
    <section class="site-section bg-white " id="testimonials-section" data-aos="fade">
        <div class="container">
            <h1 class="text-center"></h1>
            <div class="row">

                    <div class="card-header btn-succses">
                        <div class="card-title text-center">


                <div class="card" style="width:900px">
                    <div class="card-header btn-succses">
                        <div class="card-title text-center">

                            <button type="button" class=" btn btn-outline-primary ml-auto float-left" data-toggle="modal" data-target="#modalRegistroMedico">Nuevo</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <table id="tablaLHistorialP" class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Id Medico</th>
                                        <th>Nombre Medico</th>
                                        <th>Observaciones Medico</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                <form name="eliminarHistorialM" action="/eliminarHistorial" method="POST">
                                                    <input type="hidden" value="<%= item.external_id%>" id="externalDelete" name="externalDelete">
                                                    <div class="btn-group">
                                                        <a href="#" data-toggle="modal" data-target="#modalActualizaMedico" data-tooltip="tooltip" data-placement="top" title="Editar" class=" btn-info btn-sm" onclick="llenaDatosHistorial('<%= item.external_id%>')">
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
