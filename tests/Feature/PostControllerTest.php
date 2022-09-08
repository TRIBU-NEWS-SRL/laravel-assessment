<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_on_the_where()
    {
        echo '
            Warm up challenge:
            The test below is not working, add the missing things to make it works.
            
            If you do not use Docker or MySql installation, you can check sqlite:
            https://laravel.com/docs/9.x/database#sqlite-configuration
        ';
    }

    /**
     * @test
     */
    public function it_can_show_all_posts()
    {
        User::factory()->count(3)->has(Post::factory()->count(3))->create();

        $response = $this->get('/posts');

        $json = $response->assertStatus(200)->json('data.0.author');

        $this->assertIsArray($json);
    }
}
