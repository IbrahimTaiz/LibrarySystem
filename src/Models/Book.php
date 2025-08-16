<?php
declare(strict_types=1);
namespace src\Models;
class Book
{
    public  $title;
    public  $author;
    public function __construct( $title,  $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}