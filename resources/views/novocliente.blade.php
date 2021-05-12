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
                        <form action="{{route('clientes.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input type="text"
                                       name="nome"
                                       id="nome"
                                       class="form-control {{$errors->has('nome')? 'is-invalid': ''}}"
                                       value="{{old('nome')}}"
                                       placeholder="Digite o nome do cliente">

                                @foreach ($errors->get('nome') as $message)
                                <div class="invalid-feedback">
                                    {{$errors->first()}}
                                </div>
                                @endforeach

                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="text"
                                       name="idade"
                                       id="idade"
                                       class="form-control {{$errors->has('idade')? 'is-invalid':null}}"
                                       value="{{old('idade')}}"
                                ="Digite a idade do cliente">
                                @foreach ($errors->get('idade') as $message)
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label>
                                <input type="text"
                                       name="endereco"
                                       id="endereco"
                                       class="form-control {{$errors->has('endereco')? 'is-invalid':null}}"
                                       value="{{old('endereco')}}"
                                       placeholder="Digite o endereço do cliente">
                                @foreach ($errors->get('endereco') as $message)
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input type="text"
                                       ame="email"
                                       id="email"
                                       class="form-control {{$errors->has('email')? 'is-invalid':null}}"
                                       value="{{old('email')}}"
                                       placeholder="Digite o E-mail do cliente">
                                @foreach ($errors->get('email') as $message)
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn-primary btn-sm">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="{{url('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
