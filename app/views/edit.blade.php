@extends ('base')

@section ('title') Editar  @stop

@section ('content')

<h1>Editar Tarea</h1>


  <div class="row">
    <div class="form-group col-md-4">
        {{ Form::submit('Eliminar tarea', array('class' => 'btn btn-danger')) }}
    </div>
  </div>
{{ Form::close() }}

@include ('errors', array('errors' => $errors))



  <div class="row">

          	 <div class="form-group col-md-4">
                     {{ Form::model($tarea, array('route' => 'tarea.edit', 'method' => 'POST'), array('role' => 'form')) }}
          	      {{ Form::label('name', 'Titulo de tarea') }}
          	      {{ Form::text('name', null, array('placeholder' => 'Titulo ', 'class' => 'form-control')) }}
              	</div>

          	<div class="form-group col-md-10">
                {{ Form::label('desTask', 'Nombre completo') }}
                {{ Form::textarea('desTask', null, array('placeholder' => 'Edita  tu Tarea', 'class' => 'form-control')) }}
              </div>


          <div class="form-group col-md-4">
              {{ Form::button('Editar tarea', array('type' => 'submit', 'class' => 'btn btn-primary')) }}

          	{{ Form::close() }}


          </div>

 </div>

@stop
