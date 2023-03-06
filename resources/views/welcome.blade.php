<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar paciente</title>
    </head>
    <body>
        <form action="/cadastro" method="POST">
            @csrf
            <input type="string" name="foto_paciente">
            <input type="text" placeholder="nome completo" name="nome">
            <input type="text" placeholder="nome da mãe" name="nome_mae">
            <input type="date" placeholder="data de nascimento" name="data_nascimento">
            <input type="number" placeholder="coloque seu cpf" name="cpf">
            <input type="number" placeholder="coloque seu cns" name="cns">
            <input type="text" placeholder="coloque seu endereço" name="endereco">
            <input type="number" placeholder="coloque seu cep" name="cep">
            <input type="number" placeholder="número" name="numero">
            <input type="text" placeholder="complemento" name="complemento">
            <input type="text" placeholder="coloque seu bairro" name="bairro">
            <input type="text" placeholder="coloque sua cidade" name="cidade">
            <input type="text" placeholder="coloque seu estado" name="estado">
            <button>Enviar dados</button>
        </form>
    </body>
</html>
