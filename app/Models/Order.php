<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Les attributs qui peuvent être remplis via l'API.
     */
    protected $fillable = [
        'product_id',
        'client_name',
        'phone',
        'quantity',
        'address',
        'notes',
        'total_amount',
        'status',
    ];

    /**
     * Relation : Une commande appartient à un produit/service.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}