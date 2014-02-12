<?php

class Tarea extends Eloquent {

    protected $table = 'tarea';
    protected $fillable = array('name', 'desTask','estado','timestamps');



    public $errors;

    public function isValid($data)
    {
            $rules = array(

               'name' => 'required|min:4|max:40',
                'desTask' => 'required|min:5|max:170'

            );

            $validator = Validator::make($data, $rules);

            if ($validator->passes())
            {
                return true;
            }

            $this->errors = $validator->errors();

            return false;
    }

     public function validAndSave($data)
    {
        // Revisamos si la data es válida
        if ($this->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $this->fill($data);
            // Guardamos el usuario
            $this->save();

            return true;
        }

        return false;
    }
}
