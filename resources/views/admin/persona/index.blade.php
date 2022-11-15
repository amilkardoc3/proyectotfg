<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>SIS-TFG</h2> 
            </div>
        </div>

        <div class="row">
            @for($i=0; $i<4; $i++)
                @foreach($personas as $persona)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-bg-success">
                            <h5>Codigo: {{$persona->id}}</h5>
                        </div>
                        <div class="card-body">
                            <p>{{$persona->nombre.' - '.$persona->apellido}}</p>
                            <hr>
                            @if($persona->estado == 1)
                                <label class="lbl-estado text-bg-success">Activo</label>
                            @elseif($persona->estado == 0)
                                <label class="lbl-estado text-bg-danger">Inactivo</label>
                            @endif
                            <span class="sp-fecha sp-registrado">Registrado en: {{$persona->created_at}}</span>
                            <span class="sp-fecha sp-modificado">Modificado en: {{$persona->updated_at}}</span>
                        </div>
                    </div>    
                </div>
                @endforeach
            @endfor
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>