<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Box;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	['id' => 1, 'name' => "Мужские наборы", 'text' => 'At vero eos et accusamus et iusto odio dignissimosmus voluptatum deleniti'],
        	['id' => 2, 'name' => "Женские наборы", 'text' => 'At vero eos et accusamus et iusto odio dignissimosmus voluptatum deleniti'],
        ];

        foreach ($categories as $category) {
        	$categoryModel = new Category;

        	$categoryModel->id = $category['id'];
        	$categoryModel->name = $category['name'];
        	$categoryModel->text = $category['text'];

        	$categoryModel->save();
        }

        $boxes = [
        	['id' => 1, 'name' => 'Men 1', 'category_id' => 1, 'price' => 2000, 'discount' => 0, 'text' => 'At vero eos et accusamus et iusto odio dignissimosmus voluptatum deleniti'],
        	['id' => 2, 'name' => 'Men 2', 'category_id' => 1, 'price' => 500, 'discount' => 0, 'text' => 'At vero eos et accusamus et iusto odio dignissimosmus voluptatum deleniti'],
        	['id' => 3, 'name' => 'Men 2', 'category_id' => 1, 'price' => 1500, 'discount' => 1200, 'text' => 'At vero eos et accusamus et iusto odio dignissimosmus voluptatum deleniti'],
        	['id' => 4, 'name' => 'Women 1', 'category_id' => 2, 'price' => 2500, 'discount' => 2000, 'text' => 'At vero eos et accusamus et iusto odio dignissimosmus voluptatum deleniti'],
        	['id' => 5, 'name' => 'Women 2', 'category_id' => 2, 'price' => 1000, 'discount' => 0, 'text' => 'At vero eos et accusamus et iusto odio dignissimosmus voluptatum deleniti'],
        ];

        foreach ($boxes as $box) {
        	$boxModel = new Box;

        	$boxModel->id = $box['id'];
        	$boxModel->name = $box['name'];
        	$boxModel->text = $box['text'];

        	$boxModel->category_id = $box['category_id'];
        	$boxModel->price = $box['price'];
        	$boxModel->discount = $box['discount'];

        	$boxModel->save();
        }
    }
}
