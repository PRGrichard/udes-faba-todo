@extends ('base')

<?php

    if ($tarea->exists):
        $form_data = array('route' => array('tarea.update', $tarea->id), 'method' => 'PATCH');
        $action    = 'Editar';
    else:
        $form_data = array('route' => 'tarea.store', 'method' => 'POST');
        $action    = 'Crear';
    endif;

?>




@section ('title') {{ $action }}@stop

@section ('content')

<h1> {{ $action }}Tarea</h1>

<p>
    <a href="{{ route('tarea.index') }}" class="btn btn-info">Lista de Tareas</a>
  </p>


{{ Form::model($tarea, $form_data, array('role' => 'form')) }}

 @include ('errors', array('errors' => $errors))

<div class="row">
              	 <div class="form-group col-md-4">
                         {{ Form::model($tarea, array('route' => 'tarea.store', 'method' => 'POST'), array('role' => 'form')) }}
              	      {{ Form::label('name', 'Titulo de tarea') }}
              	      {{ Form::text('name', null, array('placeholder' => 'Titulo ', 'class' => 'form-control')) }}
                  	</div>

              	<div class="form-group col-md-10">
                    {{ Form::label('desTask', 'Nombre completo') }}
                    {{ Form::textarea('desTask', null, array('placeholder' => 'Describe tu Tarea', 'class' => 'form-control')) }}
                  </div>
</div>
                  {{ Form::button($action. ' tareas' ,array('type' => 'submit', 'class' => 'btn btn-primary')) }}

              	{{ Form::close() }}


@stop
