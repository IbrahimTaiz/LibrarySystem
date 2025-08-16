<?php
declare(strict_types=1);
require_once __DIR__ . '/../../vendor/autoload.php';
use src\Models\Book;
if (!isset($_SESSION['books'])) {
    $_SESSION['books'] = [];
}
if (isset($_POST['add_book'])) {
    $title = $_POST['book_title'];
    $author = $_POST['book_author'];
    if (!empty($title) && !empty($author)) {
        $_SESSION['books'][] = new Book($title, $author);
    }
}

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الكتب</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .container {
            margin: 50px auto;
            max-width: 800px;
            padding: 20px;
        }
        .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .form-box label {
            display: block;
            margin-bottom: 5px;
        }
        .form-box input {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
        }
        .form-box button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }
        .form-box button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: right;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php include '../navbar.php'; ?>
<div class="container">
    <h1>إدارة الكتب</h1>
    <div class="form-box">
        <h2>إضافة كتاب جديد</h2>
        <form method="post" action="">
            <label for="book_title">اسم الكتاب:</label>
            <input type="text" id="book_title" name="book_title" required>
            <label for="book_author">المؤلف:</label>
            <input type="text" id="book_author" name="book_author" required>
            <button type="submit" name="add_book">إضافة الكتاب</button>
        </form>
    </div>
    <h2>قائمة الكتب</h2>
    <?php if (!empty($_SESSION['books'])): ?>
        <table>
            <thead>
                <tr>
                    <th>اسم الكتاب</th>
                    <th>المؤلف</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['books'] as $book): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($book->title, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($book->author, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>لا توجد كتب مضافة حالياً.</p>
    <?php endif; ?>
</div>
</body>
</html>
