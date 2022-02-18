<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Antipasti","Primi","Secondi","Dolci","bevande"];

        foreach($categories as $category){

            $newCategory = new Category();
            $newCategory->nome = $category;
            $newCategory->slug = Str::of($newCategory->nome)->slug("-");
            $newCategory->save();
        }
    }
}
