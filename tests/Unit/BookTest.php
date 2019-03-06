<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Book;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testViewBooksAll()
    {
    	$books = factory(Book::class)->create(); 

    	$resp = $this->get('/books');
    	$resp->assertStatus(200);
    	$resp->assertSee($books->title);
    	$resp->assertSee($books->author);
    }

    public function testViewBookOnly()
    {
    	$book2 = Book::create([
    		'title' => 'The Vow',
    		'author' => 'Nicholas Sparks'
    	]);

    	// $book = Book::findOrFail(3);

    	$resp = $this->get('/book/{$book2->id}');
    	$resp->assertStatus(200);
    	$resp->assertSee($book2->title);
    }

    public function testCreateBook()
    {
        $resp = $this->post('/store', [
            'title' => 'The Notebook',
            'author' => 'Nicholas sparks'
        ]);

        // $resp->assertRedirect('/books');

        $this->assertDatabaseHas('books', [
            'title' => 'The Notebook',
            'author' => 'Nicholas sparks'
        ]);

        $book = Book::find(1);
        // $this->assertStatus(200);
        $this->assertEquals('The Notebook', $book->title);

    }

}
