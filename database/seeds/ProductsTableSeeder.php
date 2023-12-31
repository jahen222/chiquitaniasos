<?php

use App\Product;
use App\Subcategory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $productsToSwords = [
            'FINE AND RARE BOLIVIAN OFFICER’S SWORD',
            'US M.1852 NAVAL OFFICER’S SWORD',
            'ITALIAN 1888 MODEL CAVALRY OFFICER’S SWORD',
            'OTTOMAN SHAMSHIR',
            'BRITISH DIPLOMAT’S SWORD',
            'KNIGHTS TEMPLAR SWORD',
            'FRENCH INFANTRY SWORD',
            'US MILITARY ACADEMY CADET SWORD',
            'INDOPERSIAN HORSEMAN\'S SWORD C.1750'
        ];

        $productsToDaggers = [];

        $productsToShields = [];

        $productsToHelmets = [];

        $productsToArmors = [];

        $swordsThumbnails = [
            '/images/thumbnails/swords/1.jpg', '/images/thumbnails/swords/2.jpg', '/images/thumbnails/swords/3.jpg',
            '/images/thumbnails/swords/4.jpg', '/images/thumbnails/swords/5.jpg', '/images/thumbnails/swords/6.jpg',
            '/images/thumbnails/swords/7.jpg', '/images/thumbnails/swords/8.jpg', '/images/thumbnails/swords/9.jpg',
        ];

        $subcategories = Subcategory::all();

        $subcategorySwords = $subcategories->where('name', 'Árbol de levas')->first();
        $subcategoryDaggers = $subcategories->where('name', 'Inyector-bomba')->first();
        $subcategoryShields = $subcategories->where('name', 'Acero')->first();
        $subcategoryHelmets = $subcategories->where('name', 'Aluminio')->first();
        $subcategoryArmors = $subcategories->where('name', 'Magnesio')->first();

        for ($i = 0; $i < count($productsToSwords); $i++) {
            factory(Product::class)->create([
                'subcategory_id' => $subcategorySwords->id,
                'category_id' => $subcategorySwords->category->id,
                'name' => $productsToSwords[$i],
                'path_to_thumbnail' => $swordsThumbnails[$i],
                'brand' => 'anonimo',
                'model' => 'anonimo',
                'made_in' => 'china',
                'year' => 2000,
                'quantity' => 9
            ]);
        }

//        $subcategories = Subcategory::all();
//        foreach ($subcategories as $subcategory) {
//            factory(Product::class, 120)->create([
//                'subcategory_id' => $subcategory->id
//            ]);
//        }
    }
}
