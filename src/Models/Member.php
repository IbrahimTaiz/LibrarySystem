<?php
namespace src\Models;
use src\Library;
class Member extends User
{
    public function borrowBook(Book $book, Library $library)
    {
        if (!$book->isBorrowed()) {
            $book->setBorrowed(true);
            $library->log("{$this->name} borrowed {$book->getTitle()}");
        }
    }
    public function calculateLateFee(int $days): float
    {
        return $days * 1500;
    }
}