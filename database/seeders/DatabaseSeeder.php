<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Création des catégories (avec gestion de mise à jour si elles existent déjà)
        $mode = Category::firstOrCreate(['slug' => 'mode'], ['name' => 'Mode']);
        $beaute = Category::firstOrCreate(['slug' => 'beaute'], ['name' => 'Beauté']);
        $patisserie = Category::firstOrCreate(['slug' => 'patisserie'], ['name' => 'Pâtisserie']);
        $cuisine = Category::firstOrCreate(['slug' => 'cuisine'], ['name' => 'Cuisine']);

        // 2. Création des produits & services

        // --- MODE ---
        Product::create([
            'category_id'  => $mode->id,
            'name'         => 'Abaya Élégance Dorée',
            'description'  => 'Tissu fluide de haute qualité avec broderies artisanales.',
            'price'        => 35000,
            'image'        => 'https://images.unsplash.com/photo-1521572267360-ee0c2909d518?w=600',
            'type'         => 'product',
            'is_available' => true,
        ]);

        // --- BEAUTÉ ---
        Product::create([
            'category_id'  => $beaute->id,
            'name'         => 'Tresses Africaines / Fulani',
            'description'  => 'Coiffure soignée sur rendez-vous.',
            'price'        => 10000,
            'image'        => 'https://images.unsplash.com/photo-1560869713-7d0a29430803?w=600',
            'type'         => 'service',
            'is_available' => true,
        ]);

        Product::create([
            'category_id'  => $beaute->id,
            'name'         => 'Maquillage Professionnel',
            'description'  => 'Mise en beauté et maquillage complet pour vos grands événements.',
            'price'        => 15000,
            'image'        => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=600',
            'type'         => 'service',
            'is_available' => true,
        ]);

        Product::create([
            'category_id'  => $beaute->id,
            'name'         => 'Pose de Héné Traditionnel',
            'description'  => 'Motifs de héné raffinés et personnalisés sur mains ou pieds.',
            'price'        => 5000,
            'image'        => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?w=600',
            'type'         => 'service',
            'is_available' => true,
        ]);

        // --- PÂTISSERIE ---
        Product::create([
            'category_id'  => $patisserie->id,
            'name'         => 'Dèguè Onctueux Fait Maison',
            'description'  => 'Lait caillé frais et grumeaux de mil faits maison.',
            'price'        => 1500,
            'image'        => 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?w=600',
            'type'         => 'product',
            'is_available' => true,
        ]);

        Product::create([
            'category_id'  => $patisserie->id,
            'name'         => 'Crêpe Sucrée au Chocolat',
            'description'  => 'Crêpe chaude et moelleuse nappée d\'un généreux coulis de chocolat.',
            'price'        => 1500,
            'image'        => 'https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?w=600',
            'type'         => 'product',
            'is_available' => true,
        ]);

        Product::create([
            'category_id'  => $patisserie->id,
            'name'         => 'Salade de Fruits Frais',
            'description'  => 'Mélange rafraîchissant de fruits de saison coupés le jour même.',
            'price'        => 1000,
            'image'        => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600',
            'type'         => 'product',
            'is_available' => true,
        ]);

        // --- CUISINE ---
        Product::create([
            'category_id'  => $cuisine->id,
            'name'         => 'Crêpes Salées Garnies',
            'description'  => 'Garniture poulet, fromage et sauce maison.',
            'price'        => 2500,
            'image'        => 'https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?w=600',
            'type'         => 'product',
            'is_available' => true,
        ]);

        Product::create([
            'category_id'  => $cuisine->id,
            'name'         => 'Jus Naturel Maison',
            'description'  => 'Jus de bissap, gingembre ou bouye fait maison, bien frais.',
            'price'        => 1000,
            'image'        => 'https://images.unsplash.com/photo-1621506289937-a8e4df240d0b?w=600',
            'type'         => 'product',
            'is_available' => true,
        ]);
    }
}