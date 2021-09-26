<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;


class produit extends Model
{
    use HasFactory;

public function categorie(): HasOne
{
    return $this->hasOne(categorie::class);
}

public function commande(): HasMany
{
    return $this->hasMany(commande::class);
}


}
