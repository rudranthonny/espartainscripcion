<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_info_category;
use App\Models\User_info_field;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = User_info_category::all();
        //return $categories;
        return view('admin.users.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        //return $request->vcampos;


        $user = User::create($request->only('name','email')
    +[
        'password' => bcrypt($request->input('password'))
    ]);
    
    for ($i=0; $i <sizeof($request->idcampos) ; $i++) { 
        $user->campos()->attach($request->idcampos[$i],['data'=> $request->vcampos[$i],'dataformat'=> 0]);
    }   
    
    return redirect()->route('admin.users.edit',$user)->with('info','El usuario se creo con exito');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $categories = User_info_category::all();
        return view('admin.users.edit',compact('user','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         $lcampos = User_info_field::all();
         $ncampos = User_info_field::all()->count();
        $request->validate([
            'name' => 'required',
            'email' => "required|unique:users,email,$user->id",
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $user->update($request->only('name','email')
    +[
        'password' => bcrypt($request->input('password'))
    ]);
    /*Agregar ids que falta a la tabla intermedia*/
    if($ncampos != 0 ){     
    foreach ($lcampos  as $lcamp) {
        if($user->campos != '[]'){ 
            foreach ($user->campos as $camp) {
                if($lcamp->id == $camp->pivot->field_id){$existe = true;}
                else {$existe = false;     }
            }
        }
        else{$existe = false;}
        if ($existe == false) {$user->campos()->attach($lcamp->id);}
        }
        /*actulizar datos*/
        for ($i=0; $i <$ncampos ; $i++) 
            { 
            $user->campos()->updateExistingPivot($request->idcampos[$i],
            ['data'=> $request->vcampos[$i],
            'dataformat'=> 0]);
            } 
        }
    /**/   
    return redirect()->route('admin.users.edit',$user)->with('info','El usuario se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('info','El usuario se elimino con exito');
    }

    public function generar_ficha_pdf($estudiante_id)
    {   
        $estudiante = User::find($estudiante_id);
        $categories = User_info_category::all();
        $pdf = PDF::loadView('admin.users.inscripcionpdf',compact('estudiante','categories'));
        return $pdf->stream();
        //return $pdf->download('estudiante.pdf');
    }
}
