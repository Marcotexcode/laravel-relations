<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  aggiungere categorie
        $categories = ['html', 'css', 'php', 'javascript', 'Vue Cli'];

            foreach($categories as $category) {

                // <!-- creare instanza  -->

                $newCategories = new Category();

                // <!-- popolare dati -->
                $newCategories->name = $category;

                $newCategories->slug = Str::slug($category, '-');

                // <!-- salvare dati -->
                $newCategories->save();
            }
    }
}
