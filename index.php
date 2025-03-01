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
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" class="h-screen w-screen flex flex-col justify-center items-center bg-blue-400">
        <div class="flex flex-col w-[500px] h-auto items-center justify-center bg-white shadow-md space-y-12 px-6 py-8 rounded-lg">
            <h1 class="text-3xl font-bold">Welcome to Registration Form</h1>
                <input type="text" name="name" class="py-4 px-7 w-full border border-gray-700 rounded-full focus:outline-none text-xl font-semibold placeholder:text-base placeholder:font-normal" placeholder="username">
                <input type="password" name="name" class="py-4 px-7 w-full border border-gray-700 rounded-full focus:outline-none placeholder:text-base placeholder:font-normal" placeholder="password">
            <button type="submit" class="py-3 w-full bg-blue-600 hover:bg-blue-400 transition-colors duration-300 rounded-full text-white">Register</button>
        </div>
    </form>
</body>
</html>

<?php
    mysqli_close($conn);