@extends('Layout.index')
@section('content')

    {!!Form::model($puerta,['puerta.update',$puerta->id,'method'=>'PUT'])!!}
    <div class="form-group">
        {!!Form::label('nombre','Nombre de area:')!!}
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del area'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('llave','llave:')!!}
        {!!Form::text('llave',null,['class'=>'form-control','placeholder'=>'llave de area'])!!}
        {!!Form::submit('Generar Llave',['class'=>'btn btn-primary'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('ip','Dirección Ip:')!!}
        {!!Form::password('ip',['class'=>'form-control','placeholder'=>'Ingresa dirección ip'])!!}
    </div>
    <div>
        {!!Form::checkbox('puerta_especial', 'Puerta Especial')!!}
        {!!Form::label('puerta_especial','Puerta Especial')!!}
    </div>
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection

<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 24/04/2017
 * Time: 3:42 PM
 */
?>