<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Insertion des catégories
        $categories = [
            ['id' => 1, 'name' => 'Mode', 'slug' => 'mode', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Pâtisserie', 'slug' => 'patisserie', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Cuisine', 'slug' => 'cuisine', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Beauté', 'slug' => 'beaute', 'created_at' => now(), 'updated_at' => now()],
        ];

        foreach ($categories as $cat) {
            DB::table('categories')->updateOrInsert(['id' => $cat['id']], $cat);
        }

        // 2. Insertion des produits
        DB::table('products')->insert([
            // MODE
            [
                'name'        => 'Abaya Élégance',
                'description' => 'Superbe abaya traditionnelle de qualité supérieure.',
                'price'       => 25000,
                'category_id' => 1,
                'image'       => 'https://images.unsplash.com/photo-1583391733956-6c78276477e2?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // PÂTISSERIE
            [
                'name'        => 'Dèguè Onctueux',
                'description' => 'Délicieux dèguè traditionnel riche en saveurs.',
                'price'       => 1500,
                'category_id' => 2,
                'image'       => 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Crêpe Sucrée',
                'description' => 'Crêpe gourmande avec garniture au choix.',
                'price'       => 1000,
                'category_id' => 2,
                'image'       => 'https://images.unsplash.com/photo-1519676867240-f03562e64548?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Crêpe Salée',
                'description' => 'Crêpe salée garnie, idéale pour une pause gourmande.',
                'price'       => 1500,
                'category_id' => 2,
                'image'       => 'https://images.unsplash.com/photo-1565299585323-38d6b0865b47?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // CUISINE
            [
                'name'        => 'Salade de Fruits Frais',
                'description' => 'Mélange rafraîchissant de fruits de saison.',
                'price'       => 2000,
                'category_id' => 3,
                'image'       => 'https://images.unsplash.com/photo-1490474418585-ba9bad8fd0ea?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Jus Naturel Maison',
                'description' => 'Jus fait maison, 100% naturel.',
                'price'       => 1000,
                'category_id' => 3,
                'image'       => 'https://images.unsplash.com/photo-1621506289937-a8e4df240d0b?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // BEAUTÉ
            [
                'name'        => 'Coiffure & Tresses',
                'description' => 'Prestation de tresses et coiffures élégantes.',
                'price'       => 5000,
                'category_id' => 4,
                'image'       => 'https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Maquillage Professionnel',
                'description' => 'Mise en beauté pour vos événements.',
                'price'       => 10000,
                'category_id' => 4,
                'image'       => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Pose de Héné Traditionnel',
                'description' => 'Motifs de héné raffinés et personnalisés.',
                'price'       => 3000,
                'category_id' => 4,
                'image'       => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&q=80&w=400',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}