<?php
namespace src\Models;
use src\Library;
class Librarian extends User
{
    public function removeBook(Book $book, Library $library)
    {
        $library->removeBook($book);
    }
}