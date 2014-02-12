@extends('base')

@section ('title') Lista de Tareas @stop

@section ('content')

  <h1>Lista de Tareas</h1>

  <p>
    <a href="{{ route('tarea.create') }}" class="btn btn-primary">Crear nueva tarea</a>
  </p>


<table class="table table-striped">
    <tr>
        <th>Titulo</th>
        <th>Descripción de Tarea</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    @foreach ($tareas as $tarea)
    <tr>
        <td>{{ $tarea->name }}</td>
        <td>{{ $tarea->desTask}}</td>
        <td>{{ $tarea->estado}}</td>
        <td>

	          <a href="{{ route('tarea.show', $tarea->id) }}" class="btn btn-info"> Ver </a>
	           <a href="{{ route('tarea.edit', $tarea->id) }}" class="btn btn-primary">Editar</a>
	          <a href="#" data-id="{{$tarea->id }}" class="btn btn-danger btn-delete">Eliminar</a>
        </td>

	</td>
    </tr>

    @endforeach
  </table>

{{ Form::open(array('route' => array('tarea.destroy', 'TAREA_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
{{ Form::close() }}

@stop
