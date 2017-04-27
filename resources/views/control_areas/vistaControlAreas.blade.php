@extends('Layout.index')
@section('content')
    <div><h1>CONTROL DE AREAS</h1></div>
    <div>
        <table class="table">
            <thead>
                <th>NOMBRE</th>
                <th>CONTROL</th>
            </thead>
@foreach($puertas as $puerta)
            <tbody>
                <td>{{$puerta ->nombre}}</td>
                <td>{!!Form::submit('ABRIR PUERTA',['class'=>'btn btn-primary'])!!}</td>
            </tbody>
@endforeach
         </table>

    </div>

@endsection



<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 26/04/2017
 * Time: 8:43 AM
 */
?>