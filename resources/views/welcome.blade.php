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
            <div style="display: flex; flex-direction:column; width:20%; text-align:center; margin:auto;">
                <h1>Cadastrar novo paciente</h1>
                <input type="string" name="foto_paciente" placeholder="Foto do perfil" required>
                <input type="text" placeholder="nome completo" name="nome" required>
                <input type="text" placeholder="nome da mãe" name="nome_mae" required>
                <input type="date" placeholder="data de nascimento" name="data_nascimento" required>
                <input type="number" placeholder="coloque seu cpf" name="cpf" required>
                <input type="number" placeholder="coloque seu cns" name="cns" required>
                <input type="text" placeholder="coloque seu endereço" name="endereco" required>
                <input type="number" placeholder="coloque seu cep" name="cep" required>
                <input type="number" placeholder="número" name="numero" required>
                <input type="text" placeholder="complemento" name="complemento" required>
                <input type="text" placeholder="coloque seu bairro" name="bairro" required>
                <input type="text" placeholder="coloque sua cidade" name="cidade" required>
                <input type="text" placeholder="coloque seu estado" name="estado" required>
                <button>Enviar dados</button>
            </div>
        </form>
    </body>
</html>
