<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Valider">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            echo "Name is : ". $name;
        }
    ?>
</body>
</html>