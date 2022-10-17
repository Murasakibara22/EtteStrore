<?php

namespace App\Models;

use App\Models\User;
use App\Models\ProduitCommander;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'date',
        'details',
        'status',
        'created_at',
        'updated_at',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function produit_com(){
        return $this->hasMany(ProduitCommander::class);
    }
}
