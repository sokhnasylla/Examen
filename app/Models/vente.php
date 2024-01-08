<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant',
        'date' 
    ];
    protected $casts = [
        'date' => 'datetime',
    ];
    public function lignesVente()
    {
        return $this->hasMany(LigneVente::class, 'id_vente');
    }
}
