<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['users_id', 'products_id', 'jumlah'];

    public function products() {
        return $this->belongsTo(Product::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
