
@extends('adminlte::page')

@section('content_header')
<section>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nro. Pedido</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        <span class="input-group-text">Medico Solicitante</span>
        <input type="text" class="form-control" placeholder="Medico Solicitante" aria-label="Server">
      </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Paciente</span>
        <input type="text" class="form-control" placeholder="Nombre Paciente" aria-label="Nombre" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Dirección</span>
        <input type="text" class="form-control" placeholder="Dirección Paciente" aria-label="Dirección" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Sexo</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Masculino">
        <span class="input-group-text">Fecha Nacimiento</span>
        <input type="date" class="form-control"  aria-label="Server">
        <span class="input-group-text">Edad</span>
        <input type="num" class="form-control" placeholder="25" aria-label="Server">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Fecha</span>
        <input type="date" class="form-control"  aria-label="Dirección" aria-describedby="basic-addon1">
      </div>
      <span class="input-group-text" id="basic-addon1" >Detalle de Pedido</span>
      <br>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Exámenes</span>
        <input type="text" class="form-control"  aria-label="Hematocrito" aria-describedby="basic-addon1">
      </div>
</section>
<section class="site-section bg-white " id="testimonials-section" data-aos="fade">
    <div class="container">
        <h1 class="text-center"></h1>
        <div class="row">

                <div class="card-header btn-succses">
                    <div class="card-title text-center">


            <div class="card" style="width:900px">

                <div class="card-body">

                    <div class="form-group">
                        <table id="tablaLHistorialP" class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Id_Categoria</th>
                                    <th>Nombre Categoría</th>
                                    <th>Descripcion Categoría</th>
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
                                                    <a href="#" data-toggle="modal" data-target="#modalActualizaCategoria" data-tooltip="tooltip" data-placement="top" title="Editar" class=" btn-info btn-sm" onclick="llenaDatosHistorial('<%= item.external_id%>')">
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
</section>

  @stop
