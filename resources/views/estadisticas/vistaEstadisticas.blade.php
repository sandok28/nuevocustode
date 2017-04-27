@extends('Layout.index')
@section('content')
        <div>
            <h1>ESTADISTICAS</h1>
        </div>
        <div>
            {!!Form::open()!!}
            <div class="form-group">
                {!!Form::label('TIPO','TIPO DE ESTADISTICAS:')!!}
                    <p></p>
                    <div class="btn btn-primary">
                        {!!Form::select('TIPOS DE ESTADISTICAS:',array(
                         'F'=>'FUNCIONARIOS',
                         'AREAS'=>'AREAS',
                    ))!!}
                    </div>
            </div>
            <div class="from-control">
                {!!Form::label('DESDE','DESDE:')!!}
                {!!Form::text('desde',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
                {!!Form::label('HORAI','HORA DE INICIO:')!!}
                {!!Form::text('horainicio',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
            </div>
            <div class="from-control">
                {!!Form::label('HASTA','HASTA:')!!}
                {!!Form::text('hasta',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
                {!!Form::label('HORAF','HORA DE FIN:')!!}
                {!!Form::text('horafin',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
            </div>
            {!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
            {!!Form::submit('Imprimir',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}

        </div>
@endsection

<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 26/04/2017
 * Time: 9:16 AM
 */
?>