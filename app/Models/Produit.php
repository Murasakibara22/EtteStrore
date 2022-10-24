<?php

namespace App\Models;

use App\Models\Commande;
use App\Models\SousCategorie;
use App\Models\ProduitCommander;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'souscategorie_id',
        'libelle',
        'photo1',
        'photo2',
        'photo3',
        'taille',
        'couleur',
        'prix',
        'type',
        'qte_stock',
        'description',
        'created_at',
        'updated_at',
    ];

    public function produit_com(){
        return $this->hasMany(ProduitCommander::class);
    }

    public function souscat(){
        return $this->belongsTo(SousCategorie::class, 'souscategorie_id');
    }
}
 