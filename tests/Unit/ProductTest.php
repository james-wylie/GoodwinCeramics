<?php

namespace Tests\Unit;


use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    // public function test_it_has_a_path()
    // {
    //     $product= factory('App\Product')->create();
        
    //     $this->assertEquals('/products/' .  $product->id, $product->path());
    // }

    public function test_it_has_a_owner()
    {
        $product= factory('App\Product')->create();

        $this->assertInstanceOf('App\User', $product->owner);
    }

    public function test_it_has_a_user_and_it_is_goodwin_ceramics()
    {
        $product= factory('App\Product')->create();

        $this->assertInstanceOf('App\User', $product->user);
    }
}
