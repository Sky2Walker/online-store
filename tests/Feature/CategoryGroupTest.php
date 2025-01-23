<?php

namespace Tests\Feature;

use App\Models\CategoriesGroups;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryGroupTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
   public function test_get_category_groups_in_index_page(){

        $categoriesGroups = CategoriesGroups::factory(10)->create();
       $res=$this->get('/');
       $res->assertStatus(200);
       $res->assertViewIs('home');

       $res->assertViewHas('categoriesGroups',$categoriesGroups);
   }


    public function test_get_category_groups_in_shop_page(){

        $categoriesGroups = CategoriesGroups::factory(10)->create();
        $res=$this->get('/shop');
        $res->assertStatus(200);
        $res->assertViewIs('shop');

        $res->assertViewHas('categoriesGroups',$categoriesGroups);
    }
}
