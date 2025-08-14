<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
<?php include '../navbar.php'; ?>
      <form class="form-box" method="post" action="">
        <label>اسم الكتاب:</label>
        <input type="text" name="book_name" required>
        <label>عنوان الكتاب:</label>
        <input type="text" name="book_title" required>
        <button type="submit" name="add_book">إضافة الكتاب</button>
    </form>
</body>
</html>
