<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_get_all_products_on_home_page(): void
    {
        $products = Product::factory()->count(10)->create();
        $res = $this->get('/');
        $res->assertStatus(200);
        $res->assertViewIs('home');
        $res->assertViewHas('products', $products);
    }

    public function test_get_all_products_on_shop_page (): void
    {
        $products = Product::factory()->count(10)->create();
        $res = $this->get('/shop');
        $res->assertStatus(200);
        $res->assertViewIs('shop');
        $res->assertViewHas('products', $products);
    }

}
