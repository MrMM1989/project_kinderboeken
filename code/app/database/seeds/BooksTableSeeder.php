<?php
    class BooksTableSeeder extends Seeder
    {
        public function run()
        {
            $book = new Book;
            $book->fk_user = 1;
            $book->fk_avi = 1;
            $book->title = 'Test';
            $book->author = 'Some Dude';
            $book->publisher = 'Some Company';
            $book->about = 'foo';
            $book->save();
            
            $book = new Book;
            $book->fk_user = 2;
            $book->fk_avi = 2;
            $book->title = 'Test Again';
            $book->author = 'Other Dude';
            $book->publisher = 'Some Company';
            $book->about = 'foo 2';
            $book->save();
            
            $book = new Book;
            $book->fk_user = 1;
            $book->fk_avi = 3;
            $book->title = 'Test Once Again';
            $book->author = 'Some Other Dude';
            $book->publisher = 'Some Company';
            $book->about = 'foo 3';
            $book->save();
        }
    }
?>