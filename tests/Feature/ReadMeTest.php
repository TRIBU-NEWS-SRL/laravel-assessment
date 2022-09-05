<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReadMeTest extends TestCase
{
    /** @test */
    public function test_on_the_where()
    {
        echo '
            You need to reverse engineering the code in order to create tests.
            Also, you might find some weird/broken thing, you are free to do some change.
        ';
    }
}
