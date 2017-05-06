<div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('contrasena','Contraseña:')!!}
    {!!Form::password('contrasena',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>