<?php

namespace App\Models;

use App\Models\SousCategorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'libelle',
        'description',
        'created_at',
        'updated_at',
        'photo',
    ];

    public function Souscat() {
        return $this->hasMany(SousCategorie::class,'categorie_id')->get();
    }

    public function delete()
    {
       DB::transaction(function(){
            $this->Souscat()->delete();
            parent::delete();
       });
    }
}
