<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar paciente</title>
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
        <form action="/cadastro" method="POST">
            @csrf
            <div style="display: flex; flex-direction:column; width:40%; text-align:center; margin:auto;">
                <h1>Cadastrar novo paciente</h1>
                <table>
                    <tr><td class="ncampo">Foto perfil</td><td><input type="string" name="foto_paciente" placeholder="Foto do perfil" required></td></tr>
                    <tr><td class="ncampo">Nome completo</td><td><input type="text" placeholder="nome completo" name="nome" required></td></tr>
                    <tr><td class="ncampo">Nome da mãe</td><td><input type="text" placeholder="nome da mãe" name="nome_mae" required></td></tr>
                    <tr><td class="ncampo">Data de nascimento</td><td><input type="date" placeholder="data de nascimento" name="data_nascimento" required></td></tr>
                    <tr><td class="ncampo">CPF</td><td><input type="number" placeholder="coloque seu cpf" name="cpf" required></td></tr>
                    <tr><td class="ncampo">CNS</td><td><input type="number" placeholder="coloque seu cns" name="cns" required></td></tr>
                    <tr><td class="ncampo">Endereço</td><td><input type="text" placeholder="coloque seu endereço" name="endereco" required></td></tr>
                    <tr><td class="ncampo">CEP</td><td><input type="number" placeholder="coloque seu cep" name="cep" required></td></tr>
                    <tr><td class="ncampo">Número</td><td><input type="number" placeholder="número" name="numero" required></td></tr>
                    <tr><td class="ncampo">Complemento</td><td><input type="text" placeholder="complemento" name="complemento" required></td></tr>
                    <tr><td class="ncampo">Bairro</td><td><input type="text" placeholder="coloque seu bairro" name="bairro" required></td></tr>
                    <tr><td class="ncampo">Cidade</td><td><input type="text" placeholder="coloque sua cidade" name="cidade" required></td></tr>
                    <tr><td class="ncampo">Estado</td><td><input type="text" placeholder="coloque seu estado" name="estado" required></td></tr>
                    <tr><td colspan="2"><button>Enviar dados</button></td></tr>
                </table>
            </div>
        </form>
    </body>
</html>
