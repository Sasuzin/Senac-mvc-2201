<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'vendedor_id','cliente_id'];

    public function produtos()
    {
        return $this->hasMany(Vendas::class,'venda_id', 'id');
    }
}
