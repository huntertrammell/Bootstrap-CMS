<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap CMS | Home</title>
        <link rel="stylesheet" href="style/css/style.css">
    </head>
    <body>
        <?php include 'includes/db.php';?>
        <h1>Hello World</h1>
        <?php include 'includes/posts/get.php'; ?>
    </body>
</html>