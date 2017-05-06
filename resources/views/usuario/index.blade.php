
@extends('Layout.index')

@section('content')

    <div>
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif

        <div class="row">
            <h3 class="col-xs-8">INDEX USUARIOS</h3>
            <div class="col-xs-4">
                {!!Form::open(['route'=>['usuario.index'],'method'=>'GET', 'class' => "navbar-form navbar-left", 'role' => "search"])!!}
                    <div class="form-group">
                        {!!Form::text('name',null,['class'=>"form-control", 'placeholder'=>"Buscar por nombre"])!!}
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                {!!Form::close()!!}
            </div>
        </div>

        <div>
            <table class="table">
                <thead>
                <th>Nombre</th>
                <th>Email oculto</th>
                <th>Contraseña</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>editar</th>
                <th>estatus</th>
                </thead>
                @foreach($usuarios as $usuario)
                    <tbody>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->password}}</td>
                    <td>{{$usuario->created_at}}</td>
                    <td>{{$usuario->updated_at}}</td>
                    @if(($usuario->estatus) == 1)
                        <th>activo</th>
                    @else
                        <th>inactivo</th>
                    @endif
                    <th>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $usuario, $attributes = ['class'=>'btn btn-primary'])!!}</th>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

@endsection