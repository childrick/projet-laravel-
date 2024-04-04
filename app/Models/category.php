<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable=["name"];

    //methode de relation avec produit
    public function produits(){
        return $this->hasMany(produit::class);
    }

}
