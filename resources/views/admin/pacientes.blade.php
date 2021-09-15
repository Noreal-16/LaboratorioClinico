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

                    <form id="registroPaciente" action="{{route('pacientes.store')}}" method="POST" >
                        @csrf
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Nombres:</span>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre " >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Apellidos:</span>
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese Apellidos" >
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Sexo:</span>
                                    <select class="form-control" name="sexo" id="sexo" aria-describedby="espeHelp">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
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
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-text">Observaciones:</span>
                                    <input type="text" class="form-control" id="observacion" name="observacion" placeholder="Ingrese Observacion" >
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
                    <form id="actualizaPaciente">
                        @csrf
                        <input type="hidden"  id="id" name="id" />
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Nombres:</span>
                                <input type="text" class="form-control" id="nombreAC" name="nombreAC"  >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Apellidos:</span>
                                <input type="text" class="form-control" id="apellidosAC" name="apellidosAC"  >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Sexo:</span>
                                <select class="form-control" name="sexoAC" id="sexoAC" aria-describedby="espeHelp">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>

                                </select>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Número de Cédula:</span>
                                <input type="number" class="form-control" id="cedulaAC" name="cedulaAC" placeholder="Ingrese Número de Cédula" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Fecha Nacimiento:</span>
                                <input type="date" class="form-control" id="fechaAC" name="fechaAC"  >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Edad:</span>
                                <input type="number" class="form-control" id="edadAC" name="edadAC" >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Dirección:</span>
                                <input type="text" class="form-control" id="direccionAC" name="direccionAC"  >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Teléfono:</span>
                                <input type="number" class="form-control" id="telefonoAC" name="telefonoAC"  >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Correo:</span>
                                <input type="email" class="form-control" id="correoAC" name="correoAC"  >
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Observaciones:</span>
                                <input type="text" class="form-control" id="observacionAC" name="observacionAC"  >
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
                            <table id="tablaPacientes" class="table table-sm">
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

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('js')
<!--METODO PARA LISTAR DATOS Pacientes-->
<script>
    $(document).ready(function(){
        var tablPaciente = $('#tablaPacientes').DataTable({
            processing:true,
            serverSide:true,

            ajax:{
                url:"{{route('pacientes.index')}}",
            },
            columns:[
                {data: 'id'},
            {data: 'nombreP'},
            {data: 'apellido'},
            {data: 'sexo'},
            {data: 'cedula'},
            {data: 'fechaNacimiento'},
            {data: 'edad'},
            {data: 'action', orderable:false}
            ]
        });
    });
</script>
 <!--METODO PARA CARGAR DATOS-->
 <script>
function listarPacientes(id){
    $.get('pacientes/show/'+id, function(pacientes){
        //asignar datos recuperados
        $('#id').val(pacientes[0].id);
        $('#nombreAC').val(pacientes[0].nombreP);
        $('#apellidosAC').val(pacientes[0].apellido);
        $('#sexoAC').val(pacientes[0].sexo);
        $('#cedulaAC').val(pacientes[0].cedula);
        $('#fechaAC').val(pacientes[0].fechaNacimiento);
        $('#edadAC').val(pacientes[0].edad);
        $('#direccionAC').val(pacientes[0].direccion);
        $('#telefonoAC').val(pacientes[0].telefono);
        $('#correoAC').val(pacientes[0].correo);
        $('#observacionAC').val(pacientes[0].observaciones);
        $("input[name=_token]").val();
        $('#modalActualizaPaciente').modal('toggle');
    })
}
</script>
<script>
$('#actualizaPaciente').submit(function (e) {
    e.preventDefault();
    var idAc =$('#id').val();
    var nombreAc =$('#nombreAC').val();
    var apellidoAc =$('#apellidosAC').val();
    var sexoAc =$('#sexoAC').val();
    var cedulaAc =$('#cedulaAC').val();
    var fechaNAc =$('#fechaAC').val();
    var edadAc =$('#edadAC').val();
    var direccionAc =$('#direccionAC').val();
    var telefonoAc =$('#telefonoAC').val();
    var correoAc =$('#correoAC').val();
    var observacionAc =$('#observacionAC').val();
    var _tokenAc = $("input[name=_token]").val();

    $.ajax({
        url:"{{route('pacientes.update')}}",
        type:"POST",
        data:{
            id: idAc,
            nombreP: nombreAc,
            apellido:apellidoAc,
            sexo:sexoAc,
            cedula:cedulaAc,
            fechaNacimiento:fechaNAc,
            edad:edadAc,
            direccion:direccionAc,
            telefono:telefonoAc,
            correo:correoAc,
            observaciones:observacionAc,
            _token:_tokenAc
        },
        success:function (response) {
            if(response){
                $('#modalActualizaPaciente').modal('hide');
                $('#tablaPacientes').DataTable().ajax.reload();
            }
        }
    })
});
</script>
@stop
@stop

