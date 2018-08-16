<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <title>Cadastrar Cidade</title>
</head>
<body>
<div class="w-25 mx-auto my-5 text-center">
    <h5 class="font-weight-bold">Cadastro de Cidade</h5>
    <form method="post" action="{{route('cidade.store')}}" enctype="multipart/form-data" id="form-class">
        <div class="form-group ">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" required class="form-control"
                       placeholder="Digite o nome da cidade"/>
            </div>
            <div class="form-group">
                <select name="class_type" id="class_type" required>
                    @foreach($estados as $estado)
                        <option value="{{$estado -> sigla}}">{{$estado -> sigla}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="reset" value="Limpar" class="btn-secondary" id="btn-reset"/>
                <input type="submit" value="Cadastrar" class="btn-primary" id="btn-submit"/>
            </div>
        </div>
    </form>
</div>
<script href="{{asset('js/jquery.min.js')}}"></script>
<script href="{{asset('js/jquery.validate.min.js')}}"></script>
<script href="{{asset('js/additional-methods.min.js')}}"></script>
<script>
    $(function(){
        $("#form-class").validate({
            rules:{
                codigo:{
                    required:true,
                    minLength: 2,
                    maxLength: 2
                },
                nome:{
                    required: true
                },
            },
        });
    });
</script>
</body>
</html>
