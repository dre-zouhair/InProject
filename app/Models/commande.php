<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class commande extends Model
{
    use HasFactory;

    public function livraison():HasOne
    {
        return $this->hasOne(livraison::class);
    }

    public function paiment():HasOne
    {
        return $this->hasOne(paiment::class);
    }

    public function client():HasOne
    {
        return $this->hasOne(client::class);
    }

    public function produit()
    {
        return $this->belongsTo(produit::class);
    }




}
