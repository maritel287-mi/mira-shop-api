<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validation des données reçues depuis React
        $validated = $request->validate([
            'product_id'  => 'required|exists:products,id',
            'client_name' => 'required|string|max:255',
            'phone'       => 'required|string|max:50',
            'quantity'    => 'nullable|integer|min:1',
            'address'     => 'nullable|string',
            'notes'       => 'nullable|string',
        ]);

        // 2. Calcul optionnel du montant total (si le produit a un prix)
        $product = Product::find($request->product_id);
        $quantity = $request->quantity ?? 1;
        $totalAmount = $product ? ($product->price * $quantity) : 0;

        // 3. Enregistrement en base de données
        $order = Order::create([
            'product_id'   => $validated['product_id'],
            'client_name'  => $validated['client_name'],
            'phone'        => $validated['phone'],
            'quantity'     => $quantity,
            'address'      => $request->address ?? null,
            'notes'        => $request->notes ?? null,
            'total_amount' => $totalAmount,
            'status'       => 'pending',
        ]);

        // 4. Réponse JSON
        return response()->json([
            'message' => 'Commande enregistrée avec succès !',
            'order'   => $order
        ], 201);
    }
}