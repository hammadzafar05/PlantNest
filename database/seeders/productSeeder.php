<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\PlantInfo;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed categories
        $plantsCategory = Category::create(['name' => 'Plants']);
        $accessoriesCategory = Category::create(['name' => 'Accessories']);

        // Seed subcategories under Plants
        $subcategories = [
            'Flowering', 'Non-flowering', 'Indoor', 'Outdoor', 'Succulents', 'Medicinal'
        ];
        foreach ($subcategories as $subcategoryName) {
            $subcategory = Category::create(['name' => $subcategoryName, 'parent_id' => $plantsCategory->id]);
        }

        // Seed subcategories under Accessories
        $accessoriesSubcategories = [
            'Gardening Tools', 'Soil & Fertilizers', 'Pesticides'
        ];
        foreach ($accessoriesSubcategories as $subcategoryName) {
            $subcategory = Category::create(['name' => $subcategoryName, 'parent_id' => $accessoriesCategory->id]);
        }

        // Seed products under subcategories
        $categories = Category::whereNotNull('parent_id')->get();
        $faker = \Faker\Factory::create();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {
                $product = Product::create([
                    'name' => $faker->word,
                    'species' => $faker->word,
                    'price' => $faker->randomFloat(2, 10, 100),
                    'discount' => $faker->randomFloat(2, 0, 20),
                    'description' => $faker->paragraph,
                    'purpose' => $faker->sentence,
                    'stock' => $faker->numberBetween(10, 100),
                    'status' =>1,
                    'image_url' => $faker->imageUrl(),
                    'category_id' => $category->id,
                ]);
              
                    $imageCount = rand(2, 4);
                    for ($i=0; $i <= $imageCount ; $i++) { 
                        # code...
                        ProductImage::create([
                            'product_id' => $product->id,
                            'image_url' => $faker->imageUrl(),
                        ]);
                    }

               
                // Seed PlantInfo for plant products
                if ($category->parent_id === $plantsCategory->id) {
                    PlantInfo::create([
                        'product_id' => $product->id,
                        'habits' => $faker->sentence,
                        'lights' => $faker->sentence,
                        'water_requirements' => $faker->sentence,
                        'other' => $faker->sentence,
                    ]);
                }
            }
        }
    }
}
