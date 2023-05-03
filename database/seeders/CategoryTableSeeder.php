<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category1 = new Category;
        $category1->name = "Lacteos";
        $category1->description = "Productos derivados de la leche";
        $category1->save();

        $category2 = new Category;
        $category2->name = "Abarrotes";
        $category2->description = "Productos que tiene se venden a granel";
        $category2->save();

        $category3 = new Category;
        $category3->name = "Gaseosas";
        $category3->description = "Diferentes tipos de bebidas carbonatadas";
        $category3->save();

        $category4 = new Category;
        $category4->name = "Fideos";
        $category4->description = "Productos en base a harina";
        $category4->save();
    }
}
