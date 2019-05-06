<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Taylor</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
</head>

<body>
    <?php require './header.php'; ?>
    <main>
        <form action="/submitContact.php" method="post">
            <label for="name">Name: </label>
            <input type="text" name="name" required>

            <label for="email">Email: </label>
            <input type="email" name="email" required>

            <label for="comment">Message: </label>
            <textarea name="comment" form="usrform">Enter text here...</textarea>

            <input type="submit" value="Submit">
        </form>
    </main>
    <?php require './footer.php'; ?>
</body>

</html>