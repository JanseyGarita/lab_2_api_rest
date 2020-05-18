@extends('layout.layout')

@section('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-lg-5 mt-2">
                <div class="p-4" style="background: #ECF0F1">
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <input type="text" hidden name="id" value="">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" require name="nombre">
                        <label for="" class="mt-3">Teléfono</label>
                        <input type="tel" class="form-control" required name="telefono">
                        <label for="" class="mt-3">Correo</label>
                        <input type="email" class="form-control" name="correo" required>
                        <div class="text-right mt-3"><button class="btn btn-info">GUARDAR</button></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 mt-2">
                <table class="table table-bordered table-hover mt-3 w-100" id="tabla">
                    <thead style="background: #ECF0F1">
                        <tr>
                            <td>#</td>
                            <td>Nombre</td>
                            <td>Teléfono</td>
                            <td>Correo</td>
                            <td class="text-center">Editar</td>
                            <td class="text-center">Eliminar</td>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td>1</td>
                            <td>Armando Madriz</td>
                            <td>8888-8888</td>
                            <td>armando@gmail.com</td>
                            <td class="text-center"><a href="" class="btn btn-warning"><i class="fa fa-edit text-white"></i></a></td>
                            <td class="text-center"><a href="" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

@endsection