<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable=[
    "name",
    "description",
    "price",
    "photo1",
    "photo2",
    "category_id"
];

    //methode de relation avec category
    public function category()
    return $this->belongsTo(category::class);
}
