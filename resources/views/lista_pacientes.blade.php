<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista Pacientes</title>
        <style>
            h1{
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            div#lista-pacientes{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1em;
                box-shadow: 1em solid black;

            }
            table, tr, td, th {
                border: 1px solid black;
            }
            td.ncampo{
                background-color: orange;
                
            }
            button{
                font-family:Verdana, Geneva, Tahoma, sans-serif;
                height: 30px;
                background-color: wheat;
                margin-top: 10px;
                margin-bottom: 10px;
                margin:5px;
            }


        </style>
    </head>
    <body>
        <div id="lista-pacientes" style="display: flex; flex-direction:column; width:40%; text-align:center; margin:auto;">
            <h1>Lista Pacientes</h1>
            <form action="/" method="GET">
                <button id="novo_paciente">Cadastrar Paciente</button>
            </form>
            @foreach ($pacientes as $paciente)
            <table id="listapacientes">
                <tr>
                    <th colspan="2">Paciente: {{$paciente->nome}}</th>
                </tr>
                <tr>
                    <td class="ncampo">Nome completo</td>
                    <td>{{$paciente->nome}}</td> 
                </tr>
                <tr>
                    <td class="ncampo">Nome da mãe</td>
                    <td>{{$paciente->nome_mae}}</td>
                </tr>
                <tr>
                    <td class="ncampo">Nascimento</td>
                    <td>{{$paciente->data_nascimento}}</td>
                </tr>
                <tr>
                    <td class="ncampo">CPF</td>
                    <td>{{$paciente->cpf}}</td>
                </tr>
                <tr>
                    <td class="ncampo">CNS</td>
                    <td>{{$paciente->cns}}</td>
                </tr>
                <tr>
                    <td class="ncampo">Endereço</td>
                    <td>{{$paciente->endereco}}</td>
                </tr>
                <tr>
                    <td class="ncampo">Número</td>
                    <td>{{$paciente->numero}}</td>
                </tr>
                <tr>
                    <td class="ncampo">Complemento</td>
                    <td>{{$paciente->complemento}}</td>
                </tr>
                <tr>
                    <td class="ncampo">Bairro</td>
                    <td>{{$paciente->bairro}}</td>
                </tr>
                <tr>
                    <td class="ncampo">Cidade</td>
                    <td>{{$paciente->cidade}}</td>
                </tr>
                <tr>
                    <td class="ncampo">Estado</td>
                    <td>{{$paciente->estado}}</td>
                </tr>
            </table>
            <div style="display:flex; flex-direction: row; justify-content:center;">
                <form action="/editar_paciente/{{$paciente->id}}" method="GET">
                    <button id="editar">Editar</button>
                </form>
                <button><a style="text-decoration: none; color:black; cursor: default;" href="{{ url('/excluir_paciente/' . $paciente->id) }}" onclick="return  confirm('Quer mesmo excluir? Sim/Não')">Excluir</a></button>
            </div>
            <?php
                echo '<span style="margin-bottom:30px;"></span>';
            ?>
            @endforeach
        </div>
    </body>
</html>

