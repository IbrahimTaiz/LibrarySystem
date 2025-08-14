<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use LibrarySystem\Models\Book;

if (isset($_POST['add_book'])) {
    $name = $_POST['book_title'];
    $subject = $_POST['book_author'];
    if ($name && $subject) {
        $subject->addBook(new Book($title, $author));
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
<?php include  '../navbar.php'; ?>
      <form dir="rtl" style="margin: 200px;"class="form-box" method="post" action="">
        <label>اسم الكتاب:</label>
        <input type="text" name="book_name" required>
        <label>عنوان الكتاب:</label>
        <input type="text" name="book_title" required>
        <button type="submit" name="add_book">إضافة الكتاب</button>
    </form>



    
</body>
</html>
