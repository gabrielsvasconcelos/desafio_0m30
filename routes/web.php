<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Paciente;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastro', function(Request $dados_cadastro){
    Paciente::create([
        "foto_paciente" =>$dados_cadastro->foto_paciente,
        "nome" => $dados_cadastro->nome, 
        "nome_mae" => $dados_cadastro->nome_mae, 
        "data_nascimento" => $dados_cadastro->data_nascimento, 
        "cpf" => $dados_cadastro->cpf, 
        "cns" => $dados_cadastro->cns,
        "endereco" => $dados_cadastro->endereco, 
        "cep" => $dados_cadastro->cep, 
        "numero" => $dados_cadastro->numero, 
        "complemento" => $dados_cadastro->complemento, 
        "bairro" =>$dados_cadastro->bairro, 
        "cidade" =>$dados_cadastro->cidade, 
        "estado" =>$dados_cadastro->estado
    ]);
    echo 'Paciente cadastrado com sucesso!';
});

Route::get('/paciente/{id_paciente}', function($id_paciente){
    $paciente = Paciente::findOrFail($id_paciente);
    echo "<h1 style='text-align:center;'>Dados do Paciente</h1>";
    echo "<div style='text-align:center;'>";
        echo "</br>";
        echo "Nome: ".$paciente->nome;
        echo "<br/>";
        echo "Nome mãe: ".$paciente->nome_mae;
        echo "<br/>";
        echo "Data nascimento: ".$paciente->data_nascimento;
        echo "<br/>";
        echo "CPF: ".$paciente->cpf;
        echo "<br/>";
        echo "CSN: ".$paciente->csn;
        echo "<br/>";
        echo "Endereço: ".$paciente->endereco;
        echo "<br/>";
        echo "CEP: ".$paciente->cep;
        echo "<br/>";
        echo "Número: ".$paciente->numero;
        echo "<br/>";
        echo "Complemento: ".$paciente->complemento;
        echo "<br/>";
        echo "Bairro: ".$paciente->bairro;
        echo "<br/>";
        echo "Cidade: ".$paciente->cidade;
        echo "<br/>";
        echo "Estado: ".$paciente->estado;
    echo "</div>";
});

Route::get('/editar_paciente/{id_paciente}', function ($id_paciente) {
    $paciente = Paciente::findOrFail($id_paciente);
    return view('/editar_paciente', ['paciente' => $paciente]);
});

Route::put('/atualizar_paciente/{id_paciente}', function (Request $informacoes, $id_paciente) {
    $paciente = Paciente::findOrFail($id_paciente);
    $paciente->foto_paciente = $informacoes->foto_paciente;
    $paciente->nome = $informacoes->nome;
    $paciente->nome_mae = $informacoes->nome_mae; 
    $paciente->data_nascimento = $informacoes->data_nascimento;
    $paciente->cpf = $informacoes->cpf; 
    $paciente->cns = $informacoes->cns;
    $paciente->endereco = $informacoes->endereco; 
    $paciente->cep = $informacoes->cep;
    $paciente->numero = $informacoes->numero;
    $paciente->complemento = $informacoes->complemento;
    $paciente->bairro = $informacoes->bairro;
    $paciente->cidade = $informacoes->cidade; 
    $paciente->estado = $informacoes->estado;
    $paciente->save();
    echo "Dados do paciente atulizado com sucesso!";
});