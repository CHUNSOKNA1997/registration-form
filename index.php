<?php
    include("database.php");

    $message = ""; // Variable to store messages

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
       
        if (empty($username) && empty($password)) {
            $message = "Please enter username and password!";
        } elseif (empty($username)) {
            $message = "Please enter username!";
        } elseif (empty($password)) {
            $message = "Please enter password!";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO tbrigistration (name, password) VALUES ('$username', '$hash')";
            try {
                mysqli_query($conn, $sql);
                $message = "Registration successful!";
            } catch (mysqli_sql_exception $e) {
                $message = "This username is taken!";
            }
        }
        mysqli_close($conn);
    }
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="h-screen w-screen flex flex-col justify-center items-center bg-blue-400">
        <div class="flex flex-col w-[500px] h-auto items-center justify-center bg-white shadow-md space-y-6 px-6 py-8 rounded-lg">
            <h1 class="text-3xl font-bold">Welcome to Registration Form</h1>
           
            <input type="text" name="username" class="py-4 px-7 w-full border border-gray-700 rounded-full focus:outline-none text-xl font-semibold placeholder:text-base placeholder:font-normal" placeholder="Username">
           
            <input type="password" name="password" class="py-4 px-7 w-full border border-gray-700 rounded-full focus:outline-none text-xl font-semibold placeholder:text-base placeholder:font-normal" placeholder="Password">
            
            <?php if (!empty($message)) : ?>
                <?php if($message == "Registration successful!"): ?>
                    <div class="text-green-600 text-2xl">
                        <p><?php echo $message; ?></p>
                    </div>
                <?php else: ?>
                    <div class="text-red-600 text-2xl">
                        <p><?php echo $message; ?></p>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <button type="submit" class="py-3 w-full bg-blue-600 hover:bg-blue-400 transition-colors duration-300 rounded-full text-white">Register</button>
        </div>
    </form>
</body>
</html>
