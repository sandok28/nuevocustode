@extends('Layout.index')

@section('content')
    <div>
        <table class="table">
            <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CEDULA</th>
            <th>CARGO</th>
            <th>DADO DE BAJA</th>
            <th>SELECCION</th>
            </thead>
            @foreach($funcionarios as $funcionario)
                <tbody>
                <td>{{$funcionario->id}}</td>
                <td>{{$funcionario->nombre}}</td>
                <td>{{$funcionario->apellido}}</td>
                <td>{{$funcionario->cedula}}</td>
                <td>{{$funcionario->cargos_id}}</td>
                <td>{!!Form::checkbox('dado de baja','dado_de_baja',$funcionario ->dado_de_baja,false)!!}</td>
                <td>{!!Form::checkbox('seleccion','seleccion',false)!!}</td>
                </tbody>
            @endforeach
        </table>
        <div>
            {!! Form::open(['url' => ['/FuncionariosCrear'],'method'=>'GET'] ) !!}
            {!!Form::submit('CREAR',['class'=>'btn btn-primary'])!!}
            {!! Form::Close() !!}
            {!! Form::open(['url' => ['/'],'method'=>'GET'] ) !!}
            {!!Form::submit('ACTUALIZAR',['class'=>'btn btn-primary'])!!}
            {!! Form::Close() !!}
            {!!Form::submit('DAR DE BAJA',['class'=>'btn btn-primary'])!!}
        </div>
    </div>
@endsection