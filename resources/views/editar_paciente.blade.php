<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar paciente</title>
    </head>
    <body>
        <form action="/atualizar_paciente/{{$paciente->id}}" method="POST">
            @csrf
            @method("PUT")
            <div style="display: flex; flex-direction:column; width:20%; text-align:center; margin:auto;">
                <h1>Editar paciente</h1>
                <input type="string" name="foto_paciente", value="{{$paciente->foto_paciente}}" required>
                <input type="text" placeholder="nome completo" name="nome" value="{{$paciente->nome}}" required>
                <input type="text" placeholder="nome da mãe" name="nome_mae" value="{{$paciente->nome_mae}}" required>
                <input type="date" placeholder="data de nascimento" name="data_nascimento" value="{{$paciente->data_nascimento}}" required>
                <input type="number" placeholder="coloque seu cpf" name="cpf" value="{{$paciente->cpf}}" required>
                <input type="number" placeholder="coloque seu cns" name="cns" value="{{$paciente->cns}}" required>
                <input type="text" placeholder="coloque seu endereço" name="endereco" value="{{$paciente->endereco}}" required>
                <input type="number" placeholder="coloque seu cep" name="cep" value="{{$paciente->cep}}" required>
                <input type="number" placeholder="número" name="numero" value="{{$paciente->numero}}" required>
                <input type="text" placeholder="complemento" name="complemento" value="{{$paciente->complemento}}" required>
                <input type="text" placeholder="coloque seu bairro" name="bairro" value="{{$paciente->bairro}}" required>
                <input type="text" placeholder="coloque sua cidade" name="cidade" value="{{$paciente->cidade}}" required>
                <input type="text" placeholder="coloque seu estado" name="estado" value="{{$paciente->estado}}" required>
                <button>Enviar dados</button>
            </div>
        </form>
    </body>
</html>
