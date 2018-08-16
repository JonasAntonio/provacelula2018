<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <title>Prova Célula 2018</title>

</head>
<body>
<div class="m-3 text-center">
    <h5 class="font-weight-bold">Lista de Estados</h5>
    <a href="{{route('estado.create')}}">Cadastrar Estado</a>
</div>
<div class="table-responsive text-center">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
        <tr>
            <th>Sigla</th>
            <th>Estado</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($estados as $estado)
            <tr>
                <th>{{$estado -> sigla}}</th>
                <td>{{$estado -> nome}}</td>
                <td class="btn-group-sm">
                    <a href="{{route('estado.edit', $estado -> sigla)}}">Editar</a>
                    <form method="POST"
                          action="{{route('estado.destroy', $estado-> sigla)}}"
                          onsubmit="return confirm('Deseja excluir {{$estado -> nome}}?')">
                        {{method_field('DELETE')}}{{ csrf_field() }}
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
