<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Exception;

class ProductController extends Controller
{
    /**
     * Obtenir la liste de tous les produits avec leur catégorie.
     */
    public function index()
    {
        try {
            // Récupère les produits avec leur catégorie associée
            $products = Product::with('category')->get();
            
            return response()->json($products, 200);
        } catch (Exception $e) {
            // Renvoie le message d'erreur exact sous forme de JSON si un problème survient
            return response()->json([
                'message' => 'Erreur lors de la récupération des produits',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Obtenir un seul produit par son ID.
     */
    public function show($id)
    {
        try {
            $product = Product::with('category')->findOrFail($id);
            return response()->json($product, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Produit non trouvé',
                'error'   => $e->getMessage()
            ], 404);
        }
    }
}