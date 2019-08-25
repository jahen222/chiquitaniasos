<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryNames = ['Faros', 'Motores', 'Parachoques', 'Rines'];
        $pathToImages = ['src/pedro/faros-delanteros.png', 'src/pedro/motor-completo-supercargado.png', 'src/pedro/parachoque-delantero-ARB.png', 'src/pedro/rines-aros-dorados-bronce.png'];

        for ($i = 0; $i < count($categoryNames); $i++) {
            factory(Category::class)->create([
                'name' => $categoryNames[$i],
                'path_to_image' => $pathToImages[$i]
            ]);
        }
    }
}
