@extends ('base')

@section ('title') Tarea {{ $tarea->name}} @stop

@section ('content')

<h2>tarea #{{ $tarea->id }}</h2>

<p>Titulo: {{ $tarea->name }}</p>
<p>Descripción  De Tarea {{ $tarea->desTask }}</p>

<p>
  <a href="{{ route('tarea.edit', $tarea->id) }}" class="btn btn-primary">Editar</a>

</p>
