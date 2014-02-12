@extends ('base')

@section ('title') Tarea {{ $tarea->name}} @stop

@section ('content')



<div class="row">

	<h2>tarea #{{ $tarea->id }}</h2>

	<p>Titulo: {{ $tarea->name }}</p>
	<p>Descripción  De Tarea {{ $tarea->desTask }}</p>
</div>

<div class="row">


       <div class="form-group col-md-4">

                         <a href="{{ route('tarea.index') }}" class="btn btn-info">Voler</a>
                         <a href="{{ route('tarea.edit', $tarea->id) }}" class="btn btn-primary">Editar </a>

       </div>


</div>


@stop

