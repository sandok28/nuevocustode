@extends('Layout.index')
@section('content')
<div>
    {!! Form::open(['url' => '/']) !!}
    {!! Form::label('nombre','NOMBRE:')!!}
    {!! Form::label('apellido','APELLIDO:')!!}
    {!! Form::label('cedula','CEDULA:')!!}
    {!! Form::label('celular','CELULAR:')!!}
    {!! Form::label('fecha_de_nacimiento','FECHA DE NACIMIENTO:')!!}
    {!! Form::label('nombre','NOMBRE:')!!}
    {!! Form::label('nombre','NOMBRE:')!!}

    {!! Form::close() !!}
</div>


@endsection






<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 29/04/2017
 * Time: 12:22 PM
 */
?>