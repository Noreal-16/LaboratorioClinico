@extends('adminlte::page')
@section('plugins.Sweetalert2', true)
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

                    <form id="registroMedico" method="POST" action="{{route('medicos.store')}}">
                        @csrf
                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-text">Nombre:</span>
                                        <input type="text" class="form-control" id="nombreMedico" name="nombreMedico" placeholder="Ingrese Nombre Medico" >
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
                        @csrf
                        <input type="hidden"  id="id" name="id" />
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Nombre:</span>
                                <input type="text" class="form-control" id="nombreMedicoAC" name="nombreMedicoAC" placeholder="Ingrese Nombre Medico" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Observaciones:</span>
                                <textarea type="text" rows="4" cols="20" class="form-control" id="observacionAC" name="observacionAC" placeholder="Ingrese Observaciones"> </textarea>
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
                            <table id="tablaLMedicos" class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Id Medico</th>
                                        <th>Nombre Medico</th>
                                        <th>Observaciones Medico</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('js')
        <!--SwitcAlert-->
        <script>
            $('#registroMedico').submit(function (e) {
                e.preventDefault();
                Swal.fire({
                 position: 'center',
                 icon: 'success',
                 title: 'Su registro se ha guardado correctamente',
                 showConfirmButton: false,
                 timer: 1500
                 })
             this.submit();
            })
         </script>
        <!--METODO PARA LISTAR DATOS-->
        <script>
            $(document).ready(function(){
                var tablaMed = $('#tablaLMedicos').DataTable({
                    processing:true,
                    serverSide:true,

                    ajax:{
                        url:"{{route('medicos.index')}}",
                    },
                    columns:[
                        {data: 'id'},
                        {data: 'nombreM'},
                        {data: 'observaciones'},
                        {data: 'action', orderable: false},
                    ]
                });
            });
        </script>
        <!--METODO PARA CARGAR DATOS-->
        <script>
            function listaMedicos(id){
                $.get('medicos/show/'+id, function(medicos){
                    $('#id').val(medicos[0].id);
                    $('#nombreMedicoAC').val(medicos[0].nombreM);
                    $('#observacionAC').val(medicos[0].observaciones);
                    $("input[name=_token]").val();
                    $('#modalActualizaMedico').modal('toggle');
                })
            }
        </script>
        <!--METODO PARA Actualizar Datos-->
        <script>
            $('#actualizaMedico').submit(function (e) {
                e.preventDefault();

                var idmed = $('#id').val();
                var mednombre = $('#nombreMedicoAC').val();
                var medobservacion = $('#observacionAC').val();
                var _tokenMed = $('input[name=_token]').val();

                $.ajax({
                    url:"{{route('medicos.update')}}",
                    type:"POST",
                    data:{
                        id:idmed,
                        nombreM:mednombre,
                        observaciones:medobservacion,
                        _token:_tokenMed,
                    },
                    success:function (response) {
                        if(response){
                            $('#modalActualizaMedico').modal('hide');
                            $('#tablaLMedicos').DataTable().ajax.reload();
                        }
                    }
                })
            });
        </script>
        @stop
@stop
