@extends('Layout.index')
@section('content')
    {!!Form::open(['url'=>'/puertas','method'=>'POST'])!!}
    <div class="form-group">
        {!!Form::label('nombre','NOMBRE DEL AREA:')!!}
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del area'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('llave','LLAVE:')!!}
        {!!Form::text('llave',null,['class'=>'form-control','placeholder'=>'llave de area'])!!}
        {!!Form::submit('Generar Llave',['class'=>'btn btn-primary'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('ip','DIRECCION IP:')!!}
        {!!Form::text('dir_ip',null,['class'=>'form-control','placeholder'=>'llave de area'])!!}
    </div>
    <div>
        {!!Form::checkbox('puerta_especial', 1)!!}
        {!!Form::label('puerta','Puerta Especial')!!}
    </div>
    {!!Form::submit('Crear Area',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection

<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 24/04/2017
 * Time: 9:47 AM
 */
?>