<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

    protected $fillable = [ 'id',
                            'cliente_id',
                            'data_da_venda'];
    protected $table = 'Vendas';  
    
    public function clientes()
    {
        return $this->belongsTo(Clientes::class,'id');
    }

    public function Produtos()
    {
        return $this->hasMany(Produtos::class,'id');
    }
    public function NotaFiscal()
    {
        return $this->hasOne(NotasFiscais::class,'venda_id','id');
    }
}
