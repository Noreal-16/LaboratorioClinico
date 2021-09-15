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
                                                <select name="comboCategoriaAC" id="comboCategoriaAC" class="form-control">

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
    <script>
        $(document).ready(function() {
            ListarExam();
            var tablaExamen = $('#tablaExamenes').DataTable({
                processing:true,
                serverSide:true,

                ajax:{
                    url:"{{route('examenes.index')}}",
                },
                columns:[
                    {data: 'id'},
                    {data:'nombre'},
                    {data:'nombre'},
                    {data:'nombre'},
                    {data:'formato'},
                    {data:'unidadMedida'},
                    {data:'precio1'},
                    {data:'precio2'},
                    {data: 'action', orderable: false},
                ]
            });
        });
    </script>
    
    <!-----------------------------CARGAR DATOS EXAMENES------------------------------------------->
     <script>
        function ListarExam() {
            $.get('examenes/llamaData', function(examenes){
                console.log("-----------------");
                console.log(examenes);
                console.log("-----------------");
            })
        }
        </script>
     <script>
        $(document).ready(function () {
            $.get("{{route('categorias.getDatosCategoria')}}", function(categorias){
            //asignar datos recuperados
            var opcion = '';
            $.each(categorias, function (index, item) {
                opcion += '<option  value= ' + item.id + '>' + item.nombre + '</option>';
            });
            $("#comboCategoria").html(opcion);
            })
        });
    </script>
    <script>
        $(document).ready(function () {
            $.get("{{route('laboratorios.getDatosLaboratorio')}}", function(laboratorios){
            //asignar datos recuperados
            var opcion = '';
            $.each(laboratorios, function (index, item) {
                opcion += '<option  value= ' + item.id + '>' + item.nombre + '</option>';
            });
            $("#comboLaboratorio").html(opcion);
            })
        });
    </script>
    <script>
        function dato(){
            return "Bioquimica";
        }
    </script>
    @stop
@stop
