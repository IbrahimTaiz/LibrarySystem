<?php
namespace src;
use src\Traits\LoggerTrait;
class Library
{
    use LoggerTrait;
    private $books=[];
    private $users=[];
    public function addBook(Book $book)
    {
        $this->books[] = $book;
        $this->log("Book added: {$book->getTitle()}");
    }

    public function removeBook(Book $book)
    {
        foreach ($this->books as $i => $b) {
            if ($b === $book) {
                unset($this->books[$i]);
                $this->log("Book removed: {$book->getTitle()}");
                break;
            }
        }
    }

    public function addUser(User $user): void
    {
        $this->users[] = $user;
        $this->log("User added: {$user->getName()}");
    }

    public function searchBooks(string $query): array
    {
        return array_filter($this->books, function (Book $book) use ($query) {
            return stripos($book->getTitle(), $query) !== false ||
                   stripos($book->getAuthor(), $query) !== false;
        });
    }
}