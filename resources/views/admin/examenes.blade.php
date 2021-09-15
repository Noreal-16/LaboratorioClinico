@extends('adminlte::page')
@section('plugins.Sweetalert2', true)
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
                                <form id="registroExamenes" method="POST" action="{{route('examenes.store')}}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Nombres:</span>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre " >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Categoría:</span>
                                                <select name="comboCategoria" id="comboCategoria" class="form-control">

                                                </select>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Laboratorio:</span>
                                            <select name="comboLaboratorio" id="comboLaboratorio" class="form-control">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Formato:</span>
                                            <select name="formato" id="formato" class="form-control">
                                                <option value="NH-01" selected >NH-01</option>
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
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="registro2">

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
        <div class="modal fade" id="modalactualizaExamenes" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                                <form id="actualizaExamenes" >
                                    @csrf
                                    <input type="hidden"  id="id" name="id" />
                                   
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Nombres:</span>
                                            <input type="text" class="form-control" id="nombreMod" name="nombre" placeholder="Ingrese Nombre " >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Categoría:</span>
                                                <select name="comboCategoriaAC" id="comboCategoriaAC" class="form-control">

                                                </select>
                                            </div>
                                           </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Laboratorio:</span>
                                            <select name="laboratoriosAC" id="laboratoriosAC" class="form-control">
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Formato:</span>
                                            <select name="formatoAc" id="formatoAc"  class="form-control">
                                                <option value="NH-01" selected >NH-01</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Unidad de Medida:</span>
                                            <input type="text" class="form-control" id="medidaAC" name="medidaAC" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Precio 1:</span>
                                            <input type="number" class="form-control" id="precio1AC" name="precio1AC" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Precio 2:</span>
                                            <input type="number" class="form-control" id="precio2AC" name="precio2AC" >
                                        </div>
                                    </div>
                                   

                                
                            </div>
                            <div role="tabpanel" class="tab-pane" id="registro4">
                                
                                     <input type="hidden" value="" id="" name="" />

                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef1AC" name="valRef1AC" placeholder="Valor de referencia 1" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef2AC" name="valRef2AC" placeholder="Valor de referencia 2" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef3AC" name="valRef3AC" placeholder="Valor de referencia 3" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef4AC" name="valRef4AC" placeholder="Valor de referencia 4" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef5AC" name="valRef5AC" placeholder="Valor de referencia 5" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef6AC" name="valRef6AC" placeholder="Valor de referencia 6" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef7AC" name="valRef7AC" placeholder="Valor de referencia 7" >
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="valRef8AC" name="valRef8AC" placeholder="Valor de referencia 8" >
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
                        <table id="tablaExamenes" class="table table-sm">
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

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('js')
        <!--SwitcAlert-->
        <script>
            $('#registroExamenes').submit(function (e) {
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
    <script>
        $(document).ready(function() {
           
            var tablaExamen = $('#tablaExamenes').DataTable({
                processing:true,
                serverSide:true,
                ajax:{
                    url:"{{route('examenes.index')}}",
                },
                columns:[
                    {data: 'id'},
                    {data:'nombreE'},
                    {data:'nombreC'},
                    {data:'nombreL'},
                    {data:'formato'},
                    {data:'unidadMedida'},
                    {data:'precio1'},
                    {data:'precio2'},
                    {data: 'action', orderable: false},
                ]
            });
        });
    </script>
    <!----------------------------Cargar Datos A REGISTRO EXAMENES CATEGORIA------------------------------------>
     <script>
        $(document).ready(function () {
            $.get("{{route('categorias.getDatosCategoria')}}", function(categorias){
            //asignar datos recuperados
            var opcion = '';
            $.each(categorias, function (index, item) {
                opcion += '<option  value= ' + item.id + '>' + item.nombreC + '</option>';
            });
            $("#comboCategoria").html(opcion);
            })
        });
    </script>
    <!----------------------------Cargar Datos A REGISTRO EXAMENES ACTUALIZAR CATEGORIA------------------------------------>
     <script>
        $(document).ready(function () {
            $.get("{{route('categorias.getDatosCategoria1')}}", function(categorias){
            //asignar datos recuperados
            var opcion = '';
            $.each(categorias, function (index, item) {
                opcion += '<option  value= ' + item.id + '>' + item.nombreC + '</option>';
            });
            $("#comboCategoriaAC").html(opcion);
            })
        });
    </script>
    <!----------------------------Cargar Datos A REGISTRO EXAMENES LABORATORIO------------------------------------>
    <script>
        $(document).ready(function () {
            $.get("{{route('laboratorios.getDatosLaboratorio')}}", function(laboratorios){
            //asignar datos recuperados
            var opcion = '';
            $.each(laboratorios, function (index, item) {
                opcion += '<option  value= ' + item.id + '>' + item.nombreL + '</option>';
            });
            $("#comboLaboratorio").html(opcion);
            })
        });
    </script>
    <!----------------------------Cargar Datos A REGISTRO EXAMENES ACTUALIZAR LABORATORIO------------------------------------>
    <script>
        $(document).ready(function () {
            $.get("{{route('laboratorios.getDatosLaboratorio1')}}", function(laboratorios){
            //asignar datos recuperados
            var opcion = '';
            $.each(laboratorios, function (index, item) {
                opcion += '<option  value= ' + item.id + '>' + item.nombreL + '</option>';
            });
            $("#laboratoriosAC").html(opcion);
            })
        });
    </script>
    <!----------------------------LISTAR DATOS EN FORMULARIO ACTUALIZAR------------------------------------>
    <script>
        function listaExamenes(id){
            $.get('examenes/show/'+id, function(examenes){
                $('#id').val(examenes[0].id);
                $('#nombreMod').val(examenes[0].nombreE);
                $('#comboCategoriaAC').val(examenes[0].categoria_id);
                $('#laboratoriosAC').val(examenes[0].laboratorio_id);
                $('#formatoAc').val(examenes[0].formato);
                $('#medidaAC').val(examenes[0].unidadMedida);
                $('#precio1AC').val(examenes[0].precio1);
                $('#precio2AC').val(examenes[0].precio2);
                $('#valRef1AC').val(examenes[0].valReferencia1);
                $('#valRef2AC').val(examenes[0].valReferencia2);
                $('#valRef3AC').val(examenes[0].valReferencia3);
                $('#valRef4AC').val(examenes[0].valReferencia4);
                $('#valRef5AC').val(examenes[0].valReferencia5);
                $('#valRef6AC').val(examenes[0].valReferencia6);
                $('#valRef7AC').val(examenes[0].valReferencia7);
                $('#valRef8AC').val(examenes[0].valReferencia8);
                $("input[name=_token]").val();
                $('#modalactualizaExamenes').modal('toggle');
                })
            }
    </script>
    <script>
        $('#actualizaExamenes').submit(function(e){
            e.preventDefault();
            var id2 =$('#id').val();
            var nombre2 =$('#nombreMod').val();
            var cat_id =$('#comboCategoriaAC').val();
            var lab_id =$('#laboratoriosAC').val();
            var formato2 =$('#formatoAc').val();
            var uniMed2 =$('#medidaAC').val();
            var preci1 =$('#precio1AC').val();
            var preci2 =$('#precio2AC').val();
            var valref1 =$('#valRef1AC').val();
            var valref2 =$('#valRef2AC').val();
            var valref3 =$('#valRef3AC').val();
            var valref4 =$('#valRef4AC').val();
            var valref5 =$('#valRef5AC').val();
            var valref6 =$('#valRef6AC').val();
            var valref7 =$('#valRef7AC').val();
            var valref8 =$('#valRef8AC').val();
            var _token2 = $("input[name=_token]").val();

            $.ajax({
                url:"{{route('examenes.update')}}",
                type:"POST",
                data:{
                    id:id2,
                    nombreE:nombre2,
                    categoria_id: cat_id,
                    laboratorio_id:lab_id,
                    formato:formato2,
                    unidadMedida:uniMed2,
                    precio1:preci1,
                    precio2:preci2,
                    valReferencia1:valref1,
                    valReferencia2:valref2,
                    valReferencia3:valref3,
                    valReferencia4:valref4,
                    valReferencia5:valref5,
                    valReferencia6:valref6,
                    valReferencia7:valref7,
                    valReferencia8:valref8,
                    _token:_token2
                },
                success:function(response){
                    if(response){
                        $('#modalactualizaExamenes').modal('hide');
                        $('#tablaExamenes').DataTable().ajax.reload();
                    }
                }

            })
        });
    </script>
    @stop
@stop
