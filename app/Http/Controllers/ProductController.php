<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Récupère les produits disponibles avec leur catégorie liée
        return response()->json(
            Product::with('category')->where('is_available', true)->get()
        );
    }
}