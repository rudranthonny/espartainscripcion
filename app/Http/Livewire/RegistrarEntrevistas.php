<?php

namespace App\Http\Livewire;

use App\Models\Padre;
use App\Models\User;
use App\Models\User_info_category;
use App\Models\User_info_field;
use Livewire\Component;

class RegistrarEntrevistas extends Component
{
    //datos del estudiante
    public $e_name,$e_mail,$e_lastname,$e_dni,$e_fecha_nac,$e_lugar,$e_domicilio,$e_distrito,$e_adoptado;
    //datos del padre
    public $p_name,$p_lastname,$p_edad,$p_domicilio,$p_telefono,$p_estudios,$p_dni,$p_profesion,$p_domicilio_trabajo,$p_telefono_trabajo;
    //datos del madre
    public $m_name,$m_lastname,$m_edad,$m_domicilio,$m_telefono,$m_estudios,$m_dni,$m_profesion,$m_domicilio_trabajo,$m_telefono_trabajo;
    //datos
    public $formulario = true;
    public $mensaje = "";
    public $datos = [];
    //categorias
    public $categories;
    //validación
    protected $rules = [
        /*validación de estudiante*/
        'e_name' => 'required',
        'e_mail' => 'required',
        'e_lastname' => 'required',
        'e_dni' => 'required',
        'e_fecha_nac' => 'required',
        'e_lugar' => 'required',
        'e_domicilio' => 'required',
        'e_distrito' => 'required',
        'e_adoptado' => 'required',  
        /*validación del padre*/
        'p_name'=> 'required',
        'p_lastname' => 'required',
        'p_edad'=> 'required',
        'p_domicilio'=> 'required',
        'p_telefono'=> 'required',
        'p_estudios'=> 'required',
        'p_dni'=> 'required',
        'p_profesion' => 'required',
        'p_domicilio_trabajo'=> 'required',
        'p_telefono_trabajo'=> 'required',
         /*validación de lamadre*/
         'm_name'=> 'required',
         'm_lastname' => 'required',
         'm_edad'=> 'required',
         'm_domicilio'=> 'required',
         'm_telefono'=> 'required',
         'm_estudios'=> 'required',
         'm_dni'=> 'required',
         'm_profesion' => 'required',
         'm_domicilio_trabajo'=> 'required',
         'm_telefono_trabajo'=> 'required',
    ];

    public function mostrarformulario(){
        $this->formulario = false;
    }

    public function registrar_postulante(){
        $this->validate();
        $bestudiante = User::all()->where('dni',$this->e_dni)->first();
        
        if($bestudiante == null)
        {
            $lcampos = User_info_field::all()->where('require',1);
            $ncampos = User_info_field::all()->where('require',1)->count();
            $ecampos = 0;
            foreach ($this->datos as $key => $dato) {
                foreach ($lcampos as $lcampo) {
                    if($lcampo->id == $key && $dato != "" &&  $dato!="Elegir")
                    {
                    $ecampos = $ecampos + 1;
                    }
                }
            }
            if($ecampos == $ncampos){
            /*-------------------------registrar postulante---------------*/
            $postulante = new User();
            $postulante->name = $this->e_name;
            $postulante->lastname = $this->e_lastname;
            $postulante->email = $this->e_mail;
            $postulante->password = bcrypt('123456789');
            $postulante->dni = $this->e_dni;
            $postulante->fechanac = $this->e_fecha_nac;
            $postulante->lugar = $this->e_lugar;
            $postulante->domicilio = $this->e_domicilio;
            $postulante->distrito = $this->e_distrito;
            $postulante->fecharegistro = date("Y-m-d");
            $postulante->save();
            /*registrar datos del padre*/ 
            $padre = new Padre();
            $padre->name = $this->p_name;
            $padre->lastname = $this->p_lastname;
            $padre->edad = $this->p_edad;
            $padre->domicilio = $this->p_domicilio;
            $padre->telefono = $this->p_telefono;
            $padre->estudios = $this->p_estudios;
            $padre->dni = $this->p_dni;
            $padre->profesion = $this->p_profesion;
            $padre->trabajo_domicilio = $this->p_domicilio_trabajo;
            $padre->trabajo_telefono = $this->p_telefono_trabajo;
            $padre->user_id = $postulante->id;
            $padre->save();
            /*registrar datos de la madre*/
            $madre = new Padre();
            $madre->name = $this->m_name;
            $madre->lastname = $this->m_lastname;
            $madre->edad = $this->m_edad;
            $madre->domicilio = $this->m_domicilio;
            $madre->telefono = $this->m_telefono;
            $madre->estudios = $this->m_estudios;
            $madre->dni = $this->m_dni;
            $madre->profesion = $this->m_profesion;
            $madre->trabajo_domicilio = $this->m_domicilio_trabajo;
            $madre->trabajo_telefono = $this->m_telefono_trabajo;
            $madre->user_id = $postulante->id;
            $madre->save();
            /**************end*****************/
            foreach ($this->datos as $key => $dato) 
            {
                $postulante->campos()->attach($key,['data'=> $dato,'dataformat'=> 0]);
                $this->reset();
                $this->formulario = false;
                
            }
            }
            else 
            {
                $this->mensaje = "te falta completar campos verificar";
            }
        }
        else
        {
            $this->formulario = true;
            $this->mensaje = "el estudiante ya se ha registrado";
        }
    }
    public function render()
    {
        $this->categories = User_info_category::all();
        return view('livewire.registrar-entrevistas');
    }
}
