<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTableSeeder::class);
    }
}

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title'  => 'PHP Can Ban',
                'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
                'description'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores error eum inventore officia quis quos totam! Asperiores deleniti, distinctio illum incidunt nulla officiis quas suscipit vitae? Magni necessitatibus repellendus voluptate!',
                'price'=>100000
            ],
            [
                'title'  => 'Nodejs',
                'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
                'description'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores error eum inventore officia quis quos totam! Asperiores deleniti, distinctio illum incidunt nulla officiis quas suscipit vitae? Magni necessitatibus repellendus voluptate!',
                'price'=>200000
            ],
            [
                'title'  => 'android',
                'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
                'description'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores error eum inventore officia quis quos totam! Asperiores deleniti, distinctio illum incidunt nulla officiis quas suscipit vitae? Magni necessitatibus repellendus voluptate!',
                'price'=>300000
            ],
            [
                'title'  => 'Ios',
                'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
                'description'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores error eum inventore officia quis quos totam! Asperiores deleniti, distinctio illum incidunt nulla officiis quas suscipit vitae? Magni necessitatibus repellendus voluptate!',
                'price'=>400000
            ],
            ]
        );
    }
}
