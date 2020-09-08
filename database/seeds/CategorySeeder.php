<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ["name" => "Home and Kitchen"],
            ["name" => "Phones"],
            ["name" => "Fashion"],
            ["name" => "Computing"],
            ["name" => "Gaming"],
            ["name" => "Automobile"],
            ["name" => "Toys"],
            ["name" => "Grocery"],
            ["name" => "Baby Poducts"],
            ["name" => "Books"],
        ];

        foreach ($categories as $category) {
            if (!Category::where('name', $category)->count()) {
                Category::create($category);
            }
        }
    }
}
