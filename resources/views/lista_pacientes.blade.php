<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista Pacientes</title>
        <style>
            hr{
                border: 1px solid black;
                width: 40%;
            }
            h2{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1em;
            }
            div#lista-pacientes{
                text-indent: 1em;
                line-height: 0.3em;
            }
        </style>
    </head>
    <body>
        <div id="lista-pacientes" style="display: flex; flex-direction:column; width:50%; text-align:center; margin:auto;">
            <h1>Lista Pacientes</h1>
            <form action="/" method="GET">
                @method("GET")
                <button>Cadastrar Paciente</button>
            </form>
            @foreach ($pacientes as $paciente)
            <h2>Nome:{{$paciente->nome}} </h2>
            </br>
            <h2>Nome mãe:{{$paciente->nome_mae}}</h2>
            </br>
            <h2>Data nascimento:{{$paciente->data_nascimento}}</h2>
            </br>
            <h2>CPF:{{$paciente->cpf}}</h2>
            </br>
            <h2>CNS:{{$paciente->cns}}</h2>
            </br>
            <h2>Endereço:{{$paciente->endereco}}</h2>
            </br>
            <h2>Número:{{$paciente->numero}}</h2>
            </br>
            <h2>Complemento:{{$paciente->complemento}}</h2>
            </br>
            <h2>Bairro:{{$paciente->bairro}}</h2>
            </br>
            <h2>Cidade:{{$paciente->cidade}}</h2>
            </br>
            <h2>Estado:{{$paciente->estado}}</h2>
            </br>
            </br>
            <form action="/editar_paciente/{{$paciente->id}}" method="GET">
                @method("GET")
                <button>Editar</button>
            </form>
            <?php
                echo '<span style="margin-bottom:30px;"></span>';
            ?>
            @endforeach
        </div>
    </body>
</html>
