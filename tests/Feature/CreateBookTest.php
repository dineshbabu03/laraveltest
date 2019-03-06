<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Book;

class CreateBookTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateBook()
    {
        $this->post('/book', [
            'title' => 'Aspernatur eum voluptas distinctio pariatur',
            'author' => 'Vickie Muller'
        ]);

        $this->assertDatabaseHas('books', [
            'title' => 'Aspernatur eum voluptas distinctio pariatur',
            'author' => 'Vickie Muller'
        ]);

        // $resp->assertStatus(200);
    }     
}
