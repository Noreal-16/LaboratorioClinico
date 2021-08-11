@extends('adminlte::page')

@section('content_header')
    <h1>Paciente</h1>
    <div>
        <div class="modal fade" id="modalRegistroPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Registro Paciente
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    </div>
                    <form id="registroPaciente" method="POST" action="">

                            <input type="hidden" value="" id="" name="" />

                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Nombres:</span>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre " >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Apellidos:</span>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese Apellidos" >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Sexo:</span>
                                    <select name="select" class="form-control">
                                        <option value="value1" selected >Hombre</option>
                                        <option value="value2" >Mujer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Número de Cédula:</span>
                                    <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Ingrese Número de Cédula" >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Fecha Nacimiento:</span>
                                    <input type="date" class="form-control" id="fecha" name="fecha"  >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Edad:</span>
                                    <input type="number" class="form-control" id="edad" name="edad" >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Dirección:</span>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese Dirección" >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Teléfono:</span>
                                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese Teléfono" >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Correo:</span>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese correo" >
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
        <div class="modal fade" id="modalActualizaPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Actualizar Paciente
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    </div>
                    <form id="actualizaPaciente" method="POST" action="">
                        <input type="hidden" value="" id="" name="" />
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Nombres:</span>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre " >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Apellidos:</span>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese Apellidos" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Sexo:</span>
                                <select name="select" class="form-control">
                                    <option value="value1" selected >Hombre</option>
                                    <option value="value2" >Mujer</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Número de Cédula:</span>
                                <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Ingrese Número de Cédula" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Fecha Nacimiento:</span>
                                <input type="date" class="form-control" id="fecha" name="fecha"  >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Edad:</span>
                                <input type="number" class="form-control" id="edad" name="edad" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Dirección:</span>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese Dirección" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Teléfono:</span>
                                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese Teléfono" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Correo:</span>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese correo" >
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

                            <button type="button" class=" btn btn-outline-primary ml-auto float-left" data-toggle="modal" data-target="#modalRegistroPaciente">Nuevo</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <table id="tablaLHistorialP" class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Id Paciente</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Sexo</th>
                                        <th>Cédula</th>
                                        <th>Fecha Naciemiento</th>
                                        <th>Edad</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Alex
                                            </td>
                                            <td>
                                                Nole
                                            </td>
                                            <td>
                                                Hombre
                                            </td>
                                            <td>
                                                9999999999
                                            </td>
                                            <td>
                                                16-08-1994
                                              </td>
                                            <td>
                                                27
                                            </td>
                                            <td>
                                                <form name="eliminarHistorialM" action="/eliminarHistorial" method="POST">
                                                    <input type="hidden" value="<%= item.external_id%>" id="externalDelete" name="externalDelete">
                                                    <div class="btn-group">
                                                        <a href="#" data-toggle="modal" data-target="#modalActualizaPaciente" data-tooltip="tooltip" data-placement="top" title="Editar" class=" btn-info btn-sm" onclick="llenaDatosHistorial('<%= item.external_id%>')">
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
