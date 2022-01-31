<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <center><h1></h1>FICHA DE INSCRIPCIÓN DE LA CORPORACIÓN EDUCATIVA ESPARTA</h1><br>
    <img src="{{asset('img/insignia.png')}}" width="50px" height="50px"/></center>
    <hr><br>
    <center><h2>{{$estudiante->name." ".$estudiante->lastname}}</h2></center>
    <h3>Datos del Estudiante</h3><hr><br>
    <table width="100%" style="text-align: center;border-collapse: collapse;" border="1">
        <tr style="background-color: black;color :white" >
        <th>CORREO ELECTRONICO</th>
        <th>DNI</th>
        <th>FECHA DE  NACIMIENTO</th>
        </tr>
        <tr>
            <td>{{$estudiante->email}}</td>
            <td>{{$estudiante->dni}}</td>
            <td>{{$estudiante->fechanac}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">LUGAR</td>
            <td colspan="2">{{$estudiante->lugar}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">DOMICILIO</td>
            <td colspan="2">{{$estudiante->domicilio}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">DISTRITO</td>
            <td colspan="2">{{$estudiante->distrito}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">ADOPTADO</td>
            <td colspan="2">
                @if ($estudiante->adoptado == "1")
                SI
                @else
                NO
                @endif
            </td>
        </tr>
    </table>

    <h3>Datos de los Padre</h3><hr><br>
    @foreach ($estudiante->padres as $padre)
    <table width="100%" style="text-align: center;border-collapse: collapse;" border="1">
        <tr style="background-color: black;color :white" >
        <th>NOMBRES Y APELLIDOS</th>
        <th>EDAD</th>
        <th>DNI</th>
        <th>TEKEFONO</th>
        </tr>
        <tr>
            <td>{{$padre->name." ".$padre->lastname}}</td>
            <td>{{$padre->edad}}</td>
            <td>{{$padre->dni}}</td>
            <td>{{$padre->telefono}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">DOMICILIO</td>
            <td colspan="3">{{$padre->domicilio}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">ESTUDIOS</td>
            <td colspan="3">{{$padre->estudios}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">PROFESION</td>
            <td colspan="3">{{$padre->profesion}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">DOMICILIO DEL TRABAJO</td>
            <td colspan="3">{{$padre->trabajo_domicilio}}</td>
        </tr>
        <tr>
            <td style="background-color: black;color :white">TELEFONO DEL TRABAJO</td>
            <td colspan="3">{{$padre->trabajo_telefono}}</td>
        </tr>
    </table><br>
    @endforeach
    <!-------------Campos Adicionales--------------->
    @foreach ($categories as $category)
    @if ($category->campos->count()!=0) 
    <h3>{{$category->name}}</h3><hr>
        <table width="100%" style="text-align: center;border-collapse: collapse;" border="1">
        <tr style="background-color: black;color :white">
        <th>
            PREGUNTA
        </th>
        <th>RESPUESTA</th>
        </tr>
            
        
        @foreach ($category->campos as $campo)
            @php
                if($estudiante->campos == "[]"){
                $def = null;
                }
                else{ 
                    foreach ($estudiante->campos as $camp) 
                    {
                    if ($campo->id == $camp->pivot->field_id) {
                    $def = $camp->pivot->data;
                    break;
                    }
                    else {
                    $def = null;
                    }
                    }
                }
            @endphp
        <tr>
            <td>{{$campo->name}}</td>
            <td>{{$def}}</td>
        </tr>

        @endforeach
    </table><br>
    @endif
    @endforeach

</body>
</html>