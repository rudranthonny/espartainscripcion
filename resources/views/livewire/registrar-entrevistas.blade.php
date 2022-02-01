<div id="form">    
        <div id="subtitutulo"><h2>Datos del estudiante</h2></div>
        <div class='field'>
        <label>Nombre</label>
        <input type='name' autocomplete placeholder="Escribir aquí" wire:model="e_name" />
        @error('e_name')
        <span class="text-danger">falta completar</span>
        @enderror
        </div>
        <div class='field'>
        <label>Apellidos</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="e_lastname" />
        @error('e_lastname')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Email</label>
        <input type='email' autocomplete placeholder="Escribir aquí" wire:model="e_mail"/>
        @error('e_mail')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>DNI</label>
        <input type='number' autocomplete  placeholder="Escribir su DNI" wire:model="e_dni"/>
        @error('e_dni')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Fecha de Nacimiento</label>
        <input type='date'  autocomplete wire:model="e_fecha_nac"/>
        @error('e_fecha_nac')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>lugar</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="e_lugar" />
        @error('e_lugar')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Domicilio</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="e_domicilio" />
        @error('e_domicilio')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Distrito</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="e_distrito" />
        @error('e_distrito')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Adoptado</label>
        <select  wire:model.defer="e_adoptado">
            <option value="0" >Elegir</option>
            <option value="0" selected>no</option>
            <option value="1">si</option>
        </select>
        @error('e_adoptado')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <!--Datos del padre-->
        <div id="subtitutulo"><h2>Datos del Padre</h2></div>
        <div class='field'>
        <label>Nombre</label>
        <input type='name' autocomplete placeholder="Escribir aquí" wire:model="p_name" />
        @error('p_name')
        <span class="text-danger">falta completar</span>
        @enderror
        </div>
        <div class='field'>
        <label>Apellidos</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="p_lastname" />
        @error('p_lastname')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>edad</label>
        <input  type='number' autocomplete placeholder="Escribir aquí" wire:model="p_edad" />
        @error('p_edad')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Domicilio</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="p_domicilio" />
        @error('p_domicilio')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Telefono</label>
        <input  type='number' autocomplete placeholder="Escribir aquí" wire:model="p_telefono" />
        @error('p_telefono')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Estudios</label>
        <input  type='text' autocomplete placeholder="Escribir aquí" wire:model="p_estudios" />
        @error('p_estudios')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>DNI</label>
        <input type='number' autocomplete  placeholder="Escribir su DNI" wire:model="p_dni"/>
        @error('p_dni')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Profesión</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="p_profesion" />
        @error('p_profesion')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
    
        <div class='field'>
        <label>Domicilio</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="p_domicilio_trabajo" />
        @error('p_domicilio_trabajo')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class='field'>
        <label>Telefono</label>
        <input  type='number' autocomplete placeholder="Escribir aquí" wire:model="p_telefono_trabajo" />
        @error('p_telefono_trabajo')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <!--Datos de la madre-->
        <div id="subtitutulo"><center><h2>Datos de la Madre</h2></center></div>
        <div class='field'>
        <label>Nombre</label>
        <input type='name' autocomplete placeholder="Escribir aquí" wire:model="m_name" />
        @error('m_name')
        <span class="text-danger">falta completar</span>
        @enderror
        </div>
        <div class='field'>
        <label>Apellidos</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="m_lastname" />
        @error('m_lastname')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>edad</label>
        <input  type='number' autocomplete placeholder="Escribir aquí" wire:model="m_edad" />
        @error('m_edad')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Domicilio</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="m_domicilio" />
        @error('m_domicilio')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Telefono</label>
        <input  type='number' autocomplete placeholder="Escribir aquí" wire:model="m_telefono" />
        @error('m_telefono')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Estudios</label>
        <input  type='text' autocomplete placeholder="Escribir aquí" wire:model="m_estudios" />
        @error('m_estudios')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>DNI</label>
        <input type='number' autocomplete  placeholder="Escribir su DNI" wire:model="m_dni"/>
        @error('m_dni')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class='field'>
        <label>Profesión</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="m_profesion" />
        @error('m_profesion')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
 
        <div class='field'>
        <label>Domicilio</label>
        <input  type='name' autocomplete placeholder="Escribir aquí" wire:model="m_domicilio_trabajo" />
        @error('m_domicilio_trabajo')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class='field'>
        <label>Telefono</label>
        <input  type='number' autocomplete placeholder="Escribir aquí" wire:model="m_telefono_trabajo" />
        @error('m_telefono_trabajo')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        @foreach ($categories as $category)
         <!--tipo del campo-->
        @if ($category->campos->count()!=0)
            <div id="subtitutulo"><center><h2>{{$category->name}}</h2></center></div>
            @foreach ($category->campos as $campo)
                @if ($campo->dataype == "texto")
                    <div class='field'>
                    <label>{{$campo->name}}</label>
                    <input  type='text' id="datos.{{$campo->id}}" autocomplete placeholder="Escribir aquí" wire:model='datos.{{$campo->id}}'>
                    @error('datos.{{$campo->id}}')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                @elseif ($campo->dataype == "textarea")
                    <div class='field_textarea'>
                    <textarea name="" id="datos.{{$campo->id}}" cols="30" rows="10" placeholder="{{$campo->name}}" wire:model='datos.{{$campo->id}}' required></textarea>
                    @error('datos.{{$campo->id}}')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    @elseif ($campo->dataype == "menu")
                    <div class='field'>
                    <label for="">{{$campo->name}}</label>
                    @php
                    $listado = explode (' ',$campo->param1);
                    @endphp
                    <select name="" id="datos.{{$campo->id}}" wire:model='datos.{{$campo->id}}'>
                    <option>Elegir</option>
                    @foreach ($listado as $item)
                    <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                    </select>
                    @error('datos.{{$campo->id}}')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                @endif
            @endforeach
        @endif
        @endforeach
        <!--boton enviar-->
        <div class='submit'>
        <button wire:click="registrar_postulante()">
            REGISTRARME
        </button>
        </div>
        <div class='submit'>
            @if($formulario == true)
            <div style="color: red">{{$mensaje}}</div>
            @else
            <button wire:loading.attr="disabled" wire:target="mostrarformulario()" wire:click="mostrarformulario()">
                Felicidades, su inscripción fue un exito
            </button>
            @endif
        </div>
</div>