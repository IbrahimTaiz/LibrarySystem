<?php
class Book
{
    private $name;
    private $subject;
    
    public function __construct($n,$s)
    {
        $this->name = $n;
        $this->subject = $s;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
<?php include 'src/navbar.php'; ?>
    
</body>
</html>
