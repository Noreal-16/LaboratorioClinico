
@extends('adminlte::page')
@section('plugins.Sweetalert2', true)
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
                                    <th>ID</th>
                                    <th>Exámen</th>
                                    <th>Categoria</th>
                                    <th>Laboratorio</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  @stop
