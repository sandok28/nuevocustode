
@extends('Layout.index')

@section('content')
    <div>
        <p>FPruebas de html Usuarios</p>

    </div>
    <div>
        {!!Form::open(['route'=>'Usuario', 'method'=>'POST'])!!}
        <div class="form-group">
            {!!Form::label('nombre','Nombre:')!!}
            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Usuario'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('email','Correo:')!!}
            {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('password','Contraseña:')!!}
            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Usuario'])!!}
        </div>
        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}

    </div>

@endsection