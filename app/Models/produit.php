<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'designation',
        'prixunitaire',
        'quantite',
        'id_cat'
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_cat');
    }
    public function ligneVente()
    {
        return $this->hasMany(LigneVente::class, 'id_prod');
    }
}
