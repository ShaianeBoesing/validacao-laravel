<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
<main role="main">
    <div class="row">
        <div class="container col-md-8 offset-md-2 mt-3">
            <div class="card card-border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro de Cliente
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-ordered table-hover" id="tabelaprodutods">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Idade</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cli)
                                <tr>
                                    <th>{{$cli->id}}</th>
                                    <th>{{$cli->nome}}</th>
                                    <th>{{$cli->endereco}}</th>
                                    <th>{{$cli->idade}}</th>
                                    <th>{{$cli->email}}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="{{url('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
