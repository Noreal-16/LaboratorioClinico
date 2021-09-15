@extends('adminlte::page')
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Laboratorios</h1>
    <div>
        <div class="modal fade" id="modalRegistroLaboratorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Registro Laboratorio
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    </div>
                    <form id="registroLaboratorio" method="POST" action="{{route('laboratorios.store')}}">
                        @csrf
                                 <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-text">Nombre:</span>
                                        <input type="text" class="form-control" id="nombreLaboratorio" name="nombreLaboratorio" placeholder="Ingrese Nombre Laboratorio" >
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-text">Descripcion:</span>
                                        <textarea type="text" rows="4" cols="20" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese Descripcion"> </textarea>
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
        <div class="modal fade" id="modalActualizaLaboratorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Modificar Laboratorio
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    </div>
                    <form id="actualizaLaboratorio" >
                        @csrf
                        <input type="hidden"  id="id" name="id" />
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Nombre:</span>
                                <input type="text" class="form-control" id="nombreLaboratorioAC" name="nombreLaboratorioAC" placeholder="Ingrese Nombre Laboratorio" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Descripcion:</span>
                                <textarea type="text" rows="4" cols="20" class="form-control" id="descripcionAC" name="descripcionAC" placeholder="Ingrese Descripcion"> </textarea>
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

                            <button type="button" class=" btn btn-outline-primary ml-auto float-left" data-toggle="modal" data-target="#modalRegistroLaboratorio">Nuevo</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <table id="tablaLaboratorio" class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Id_Laboratorio</th>
                                        <th>Nombre Laboratorio</th>
                                        <th>Descripcion Laboratorio</th>
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
            $('#registroLaboratorio').submit(function (e) {
                e.preventDefault();
                Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: 'Su registro se ha guardado correctamente',
                 showConfirmButton: false,
                 timer: 2000
                 })
             this.submit();
            })
         </script>
            <script>
                $(document).ready(function(){
                    var tabLaboratorio = $('#tablaLaboratorio').DataTable({
                        processing:true,
                        serverSide:true,

                        ajax:{
                            url:"{{route('laboratorios.index')}}",
                        },
                        columns:[
                            {data: 'id'},
                            {data: 'nombreL'},
                            {data: 'descripcion'},
                            {data: 'action', orderable: false},

                        ]
                    })
                })
            </script>
            <script>
                function listaLaboratorios(id){
                    $.get('laboratorios/show/'+id, function(laboratorios){
                        $('#id').val(laboratorios[0].id);
                        $('#nombreLaboratorioAC').val(laboratorios[0].nombreL);
                        $('#descripcionAC').val(laboratorios[0].descripcion);
                        $("input[name=_token]").val();
                        $('#modalActualizaLaboratorio').modal('toggle');
                    })
                }
            </script>
            <script>
                $('#actualizaLaboratorio').submit(function (e) {
                    e.preventDefault();

                    var idLab =$('#id').val();
                    var labNombre = $('#nombreLaboratorioAC').val();
                    var labDescripcion = $('#descripcionAC').val();
                    var _tokenLab =$('input[name=_token]').val();

                    $.ajax({
                        url:"{{route('laboratorios.update')}}",
                        type:"POST",
                        data:{
                            id:idLab,
                            nombreL:labNombre,
                            descripcion:labDescripcion,
                            _token:_tokenLab,
                        },
                        success:function (response) {
                            if(response){
                                $('#modalActualizaLaboratorio').modal('hide');
                                $('#tablaLaboratorio').DataTable().ajax.reload();
                            }
                        }
                    })
                })
            </script>
        @stop
@stop
