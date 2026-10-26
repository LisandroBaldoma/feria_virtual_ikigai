<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->upsert([
            ['name' => 'Cerámica y Barro', 'slug' => 'ceramica-y-barro'],
            ['name' => 'Estudios Botánicos y Papelería', 'slug' => 'estudios-botanicos-y-papeleria'],
            ['name' => 'Diseño Textil y Telar Consciente', 'slug' => 'diseno-textil-y-telar-consciente'],
            ['name' => 'Activos Digitales y Recursos', 'slug' => 'activos-digitales-y-recursos'],
            ['name' => 'Joyería de Autor y Metales', 'slug' => 'joyeria-de-autor-y-metales'],
            ['name' => 'Cosmética Botánica y Alquimia', 'slug' => 'cosmetica-botanica-y-alquimia'],
        ], ['slug'], ['name']);
    }
}
