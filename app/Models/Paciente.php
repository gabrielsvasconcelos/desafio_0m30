<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ["foto_paciente", "nome", "nome_mae", "data_nascimento", "cpf", "cns", "endereco", "cep", "numero", "complemento", "bairro", "cidade", "estado"];
    
    
}
