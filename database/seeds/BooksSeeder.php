<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample penulis
        $author1= Author::create(['name'=>'Muhamad Fauzil Adhim']);
        $author2= Author::create(['name'=>'Salim A. Fillah']);
        $author3= Author::create(['name'=>'Aam Amirudin']);

        // Sample Book
        $book1 = Book::create(['title'=>'Kupinang Engau Dengan Hamdalah','amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Jalan Cinta Para Pejuang','amount'=>2,'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Membingkai Surga Dalam Rumah Tangga','amount'=>4, 'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Cinta & SEKS Dalam Rumah Tangga Muslim','amount'=>3, 'author_id'=>$author3->id]);
    }
}
