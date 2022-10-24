<?php

namespace App\Models;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SousCategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'categorie_id',
        'libelle',
        'description',
        'created_at',
        'updated_at',
        'photo'
    ];

    public function categorie() {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function prod() {
        return $this->hasMany(Produit::class, 'souscategorie_id')->get();
    }

    public function delete()
    {
       DB::transaction(function(){
            $this->prod()->delete();
            parent::delete();
       });
    }
}
