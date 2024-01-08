<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligneVente extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'quantite',
        'id_prod',
        'id_vente'
    ];
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_prod');
    }
    public function vente()
    {
        return $this->belongsTo(Vente::class, 'id_vente');
    }
}
