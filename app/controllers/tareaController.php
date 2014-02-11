<?php

class tareaController extends \BaseController {


	 public $restful = true;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$tareas = Tarea::paginate();
		return View::make('list', array('tareas' => $tareas));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$tarea = new Tarea;
     		 return View::make('/form')->with('tarea', $tarea);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


	        $tarea  = new Tarea;

	        $data = Input::all();


	        if ($tarea->isValid($data))
	        {

	            $tarea->fill($data);

	            $tarea->save();

	            return Redirect::route('tarea.index');
	        }
	        else
	        {

		return Redirect::route('tarea.create')->withInput()->withErrors($tarea->errors);
	        }
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$tarea = Tarea::find($id);

		        if (is_null($tarea)) App::abort(404);

		      return View::make('show', array('tarea' => $tarea));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$tarea= Tarea::find($id);
		if (is_null ($tarea))
		{
		return App::abort(404);
		}
		else
		{
		return View::make('form')->with('tarea', $tarea);
		}




	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{


	        $tarea = Tarea::find($id);


	        if (is_null ($tarea))
	        {
	            App::abort(404);
	        }


	        $data = Input::all();


	        if ($tarea->isValid($data))
	        {

	            $tarea->fill($data);

	            $tarea->save();

	            return Redirect::route('tarea.index', array($tarea->id));
	        }
	        else
	        {

	            return Redirect::route('tarea.edit', $tarea->id)->withInput()->withErrors($tarea->errors);
	        }

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	        $tarea = Tarea::find($id);

	        if(is_null($tarea))
	        {
	            return Response::json('tarea no encontrada', 404);
	        }
	        else{

	        $tareaEliminada = $tarea;
	        $tarea->delete();
	        return Response::json('tarea eliminado',200);
	        }
	}
}
