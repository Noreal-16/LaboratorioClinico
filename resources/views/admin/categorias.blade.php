@extends('adminlte::page')
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Categorías</h1>
   <section>
    <div>
        <div class="modal fade" id="modalRegistroCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Registro Categoría
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    </div>
                    <form id="registroCategoria" method="POST" action="{{route('categorias.store')}}">
                        @csrf


                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-text">Nombre:</span>
                                        <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" placeholder="Ingrese Nombre Categoría" >
                                    </div>
                                    @error('nombreCategoria')
                                    <small>*{{$message}}</small>
                                    @enderror
                                </div>
                                
                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-text">Descripcion:</span>
                                        <textarea type="text" rows="4" cols="20" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese Descripcion"> </textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="modal fade" id="modalActualizaCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Actualizar Categoría
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    </div>
                    <form id="actualizaCategoria" >
                        @csrf
                        <input type="hidden" name="txtId" id="txtId">
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Nombre:</span>
                                <input type="text" class="form-control" id="nombreCategoriaAc" name="nombreCategoriaAc" value="">
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Descripcion:</span>
                                <textarea type="text" rows="4" cols="20" class="form-control" id="descripcionAc" name="descripcionAc"></textarea>
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

                            <button type="button" class=" btn btn-outline-primary ml-auto float-left" data-toggle="modal" data-target="#modalRegistroCategoria">Nuevo</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <table id="tablaCategoria" class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Id_Categoria</th>
                                        <th>Nombre Categoría</th>
                                        <th>Descripcion Categoría</th>
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
    <section >
        <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="eliminaCategoriaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Desea eliminar la categoria?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"data-dismiss="modal">Cancelar</button>
          <button type="submit"  id="btnEliminar" name="btnEliminar" class="btn btn-danger">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
    </section>
    @section('js')
    <!--METODO PARA LISTAR DATOS-->
    <script>
        $(document).ready(function() {
            console.log("Ingresado");
        var tablaCategorias = $('#tablaCategoria').DataTable({
            processing:true,
            serverSide:true,

            ajax:{
                url:"{{route('categorias.index')}}",
            },
            columns:[
                {data: 'id'},
                {data: 'nombreC'},
                {data: 'descripcion'},
                {data: 'action', orderable: false},
            ]
        });
    });
    </script>
    <!--SwitcAlert-->
    <script>
       $('#registroCategoria').submit(function (e) {
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
    <!--METODO PARA ELIMINAR DATOS-->
    <script>
        var cate_ide;
        $(document).on('click','.delete', function(){
            cate_ide = $(this).attr('id');
            $('#eliminaCategoriaModal').modal('show');
        });
        $('#btnEliminar').on('click', function(){
            $.ajax({
                url:"categorias/eliminar/"+cate_ide,
                //beforeSend:function(){
                    //$('#btnEliminar').text('Eliminanco...');
                //},
                success:function(data){
                    setTimeout(function(){
                        $('#eliminaCategoriaModal').modal('hide');
                        $('#tablaCategoria').DataTable().ajax.reload();
                    }, 500);
                    $('#btnEliminar').text('Eliminar');
                }
            });
        })
    </script>
    <!--METODO PARA CARGAR DATOS-->
    <script>
        function editarCategoria(id) {
            $.get('categorias/show/'+id, function(categorias){
            //asignar datos recuperados
            $('#txtId').val(categorias[0].id);
            $('#nombreCategoriaAc').val(categorias[0].nombreC);
            $('#descripcionAc').val(categorias[0].descripcion);
            $("input[name=_token]").val();
            $('#modalActualizaCategoria').modal('toggle');
            })
        }
    </script>
    <!--METODO PARA ACTUALIZAR DATOS-->
    <script>
        $('#actualizaCategoria').submit(function(e){
            e.preventDefault();
            //
            
            //
            var id2 =$('#txtId').val();
            var nombre2 =$('#nombreCategoriaAc').val();
            var descripcion2 =$('#descripcionAc').val();
            var _token2 = $("input[name=_token]").val();

            $.ajax({
                url:"{{route('categorias.update')}}",
                type:"POST",
                data:{
                    id:id2,
                    nombreC:nombre2,
                    descripcion:descripcion2,
                    _token:_token2
                },
                success:function(response){
                    if(response){
                        $('#modalActualizaCategoria').modal('hide');
                        $('#tablaCategoria').DataTable().ajax.reload();
                        
                    }
                }

            })
        });
    </script>
    <script>
        $('#actualizaCategoria').submit(function (e) {
            e.preventDefault();
            
        })
     </script>
    @stop
@stop
