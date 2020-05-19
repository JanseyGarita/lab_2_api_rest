@extends('layout.layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-5 mt-2">
            <div class="p-4" style="background: #ECF0F1">
                <?php
                    if(isset($editar)){
                ?>
                <form action="{{route('actualizar')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="text" hidden name="id" value="<?=$id?>">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" require name="nombre" value="<?=$nombre?>">
                    <label for="" class="mt-3">Teléfono</label>
                    <input type="tel" class="form-control" required name="telefono" value="<?=$telefono?>">
                    <label for="" class="mt-3">Correo</label>
                    <input type="email" class="form-control" name="correo" required value="<?=$correo?>">
                    <div class="text-right mt-3">
                        <button class="btn btn-info text-uppercase">actualizar</button>
                    </div>
                </form>

                <?php
                    }else{
                ?>
                <form action="{{route('insertar')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="text" hidden name="id" value="">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" require name="nombre">
                    <label for="" class="mt-3">Teléfono</label>
                    <input type="tel" class="form-control" required name="telefono">
                    <label for="" class="mt-3">Correo</label>
                    <input type="email" class="form-control" name="correo" required>
                    <div class="text-right mt-3">
                        <button class="btn btn-info text-uppercase">agregar</button>
                    </div>
                </form>
                <?php
                    }
                ?>
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
                    <?php
                    //print_r($personas);
                    if(isset($personas)){
                        $i = 1;
                        foreach ($personas as $persona) {
                            ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$persona->nombre?></td>
                        <td><?=$persona->telefono?></td>
                        <td><?=$persona->correo?></td>
                        <td class="text-center">
                            <a href="{{route('persona',$persona->id)}}" class="btn btn-warning">
                                <i class="fa fa-edit text-white"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{route('eliminar',$persona->id)}}" class="btn btn-danger">
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                        }
                    }
                   ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection