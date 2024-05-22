<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'logradouro',
        'cep',
        'bairro',
    ];

    public function getClientesPesquisarIndex (string $search)
    {
        $produto = $this->where(function ($query) use ($search)
        {
            if ($search)
            {
                $query->where('nome', $search);
                $query->orWhere('nome', 'LIKE', "%{$search}%");
                $query->orWhere('cpf', 'LIKE', "%{$search}%");
            }
        })->get();
        return $produto;
    }
}
