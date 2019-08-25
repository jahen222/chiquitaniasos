<?php

use App\Category;
use App\Subcategory;
use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategoryNamesToFaros = ['Led', 'Xenón', 'Halógeno'];
        $subcategoryNamesToMotores = ['Árbol de levas', 'Inyector-bomba'];
        $subcategoryNamesToParachoques = ['Delantero', 'Trasero'];
        $subcategoryNamesToRines = ['Acero', 'Aluminio', 'Magnesio'];

        $categories = Category::all();

        $categoryToFaros = $categories->where('name', 'Faros')->first();
        $categoryToMotores = $categories->where('name', 'Motores')->first();
        $categoryToParachoques = $categories->where('name', 'Parachoques')->first();
        $categoryToRines = $categories->where('name', 'Rines')->first();

        for ($i = 0; $i < count($subcategoryNamesToFaros); $i++) {
            factory(Subcategory::class)->create([
                'name' => $subcategoryNamesToFaros[$i],
                'category_id' => $categoryToFaros->id
            ]);
        }

        for ($i = 0; $i < count($subcategoryNamesToMotores); $i++) {
            factory(Subcategory::class)->create([
                'name' => $subcategoryNamesToMotores[$i],
                'category_id' => $categoryToMotores->id
            ]);
        }

        for ($i = 0; $i < count($subcategoryNamesToParachoques); $i++) {
            factory(Subcategory::class)->create([
                'name' => $subcategoryNamesToParachoques[$i],
                'category_id' => $categoryToParachoques->id
            ]);
        }

        for ($i = 0; $i < count($subcategoryNamesToRines); $i++) {
            factory(Subcategory::class)->create([
                'name' => $subcategoryNamesToRines[$i],
                'category_id' => $categoryToRines->id
            ]);
        }
    }
}
