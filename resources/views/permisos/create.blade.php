
@extends('Layout.index')

@section('content')
    <div>
        <p>CREAR Permiso</p>

    </div>
    <div>
        {!!Form::open(['route'=>'permiso.store', 'method'=>'POST'])!!}
            @include('permisos.forms.formulario')
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}

    </div>

@endsection