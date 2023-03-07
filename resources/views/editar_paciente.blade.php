<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar paciente</title>
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
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1em;
                box-shadow: 1em solid black;
            }
            button{
                font-family:Verdana, Geneva, Tahoma, sans-serif;
                height: 30px;
                background-color: wheat;
            }
            input{
                width: 98%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <form action="/atualizar_paciente/{{$paciente->id}}" method="POST">
            @csrf
            @method("PUT")
            <div style="display: flex; flex-direction:column; width:40%; text-align:center; margin:auto;">
                <h1>Editar paciente</h1>
                <table>
                    <tr><td class="ncampo">Foto</td><td><input type="string" name="foto_paciente", value="{{$paciente->foto_paciente}}" required></td></tr>
                    <tr><td class="ncampo">Nome completo</td><td><input type="text" placeholder="nome completo" name="nome" value="{{$paciente->nome}}" required></td></tr>
                    <tr><td class="ncampo">Nome da mãe</td><td><input type="text" placeholder="nome da mãe" name="nome_mae" value="{{$paciente->nome_mae}}" required></td></tr>
                    <tr><td class="ncampo">Data de nascimento</td><td><input type="date" placeholder="data de nascimento" name="data_nascimento" value="{{$paciente->data_nascimento}}" required></td></tr>
                    <tr><td class="ncampo">CPF</td><td><input type="number" placeholder="coloque seu cpf" name="cpf" value="{{$paciente->cpf}}" required></td></tr>
                    <tr><td class="ncampo">CNS</td><td><input type="number" placeholder="coloque seu cns" name="cns" value="{{$paciente->cns}}" required></td></tr>
                    <tr><td class="ncampo">Endereço</td><td><input type="text" placeholder="coloque seu endereço" name="endereco" value="{{$paciente->endereco}}" required></td></tr>
                    <tr><td class="ncampo">CEP</td><td><input type="number" placeholder="coloque seu cep" name="cep" value="{{$paciente->cep}}" required></td></tr>
                    <tr><td class="ncampo">Número</td><td><input type="number" placeholder="número" name="numero" value="{{$paciente->numero}}" required></td></tr>
                    <tr><td class="ncampo">Complemento</td><td><input type="text" placeholder="complemento" name="complemento" value="{{$paciente->complemento}}" required></td></tr>
                    <tr><td class="ncampo">Bairro</td><td><input type="text" placeholder="coloque seu bairro" name="bairro" value="{{$paciente->bairro}}" required></td></tr>
                    <tr><td class="ncampo">Cidade</td><td><input type="text" placeholder="coloque sua cidade" name="cidade" value="{{$paciente->cidade}}" required></td></tr>
                    <tr><td class="ncampo">Estado</td><td><input type="text" placeholder="coloque seu estado" name="estado" value="{{$paciente->estado}}" required></td></tr>
                    <tr><td colspan="2"><button>Enviar dados</button></td></tr>
                <table>
            </div>
        </form>
    </body>
</html>
