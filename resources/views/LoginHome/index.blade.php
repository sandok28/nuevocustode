<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/flexboxgrid.css') !!}
    {!! HTML::script('js/jquery.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}

</head>
<body>
<div class="row center-xs" style="margin-top: 5em;">
    <div class="header-info col-xs-4" style="margin-bottom: " >

        <h1>CUSTODE</h1>
        {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
        <div class="form-group">
            {!!Form::label('email','Usuario:')!!}
            {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu usuario'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('password','Contraseña:')!!}
            {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
        </div>
        @include('alerts.errors')
        {!!Form::submit('Iniciar',['class'=>'btn btn-primary','style'=>'margin-top: 1em;'])!!}
        {!!Form::close()!!}
    </div>
</div>


</body>
</html>

