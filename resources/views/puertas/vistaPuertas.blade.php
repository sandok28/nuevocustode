@extends('Layout.index')
@section('content')
<div>
    <table class="table">
        <thead>
            <th>NOMBRE</th>
            <th>LLAVE(ENCRIPTADA)</th>
            <th>IP</th>
            <th>SELECCION</th>
            <th>DADO DE BAJA</th>
            <th>PUERTA ESPECIAL</th>
        </thead>
        @foreach($puertas as $puerta)
        <tbody>
            <td>{{$puerta ->nombre}}</td>
            <td>{{$puerta ->llave_rfid}}</td>
            <td>{{$puerta ->ip}}</td>
            <td>
            {!! link_to_route('puerta',$title='EDITAR',$parameters=$puerta->id,$atributes=['class'=>'btn btn-primary']) !!}
            </td>
            <td>{!!Form::checkbox('dado_baja', 'Dado de baja')!!}</td>
            <td>{!!Form::checkbox('puerta_especial','puerta_especial',$puerta ->puerta_especial)!!}</td>
        </tbody>
            @endforeach
    </table>
</div>
<div>
    {!! Form::open(['url' => ['/GestionAreasCrear'],'method'=>'GET'] ) !!}
    {!!Form::submit('CRERA',['class'=>'btn btn-primary'])!!}
    {!! Form::Close() !!}
    {!! Form::Close() !!}
    {!!Form::submit('DADO DE BAJA',['class'=>'btn btn-primary'])!!}
</div>

@endsection
<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 24/04/2017
 * Time: 8:37 AM
 */
?>



