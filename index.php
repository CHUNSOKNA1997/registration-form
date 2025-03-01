<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" class="h-screen w-screen flex flex-col justify-center items-center">
        <h1 class="text-xl">Welcome to Registration Form</h1>

        <label for="username">Name:</label>
        <input type="text" name="name">

        <label for="password">Password:</label>
        <input type="password" name="name">

        <button type="submit">Register</button>
    </form>
</body>
</html>

<?php
    mysqli_close($conn);