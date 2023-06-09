<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css"/>
</head>
<body>
    <main class="flex items-center justify-center h-screen bg-gray-500">
        <form action="loginAction.php" method="POST">
            <div class="bg-white w-96 p-6 rounded shadow-sm">
                <div class="flex items-center justify-center mb-4">
                    <img src="./img/Logo.png">
                </div>
                <label class="text-gray-700">Email</label>
                <input class="w-full py-2 bg-gray-50 text-gray-700 px-1 outline-none mb-4" name="login" type="email">
                <label class="text-gray-700">Password</label>
                <input class="w-full py-2 bg-gray-50 text-gray-700 px-1 outline-none mb-4" name="password" type="password">
                <button type="submit" class="bg-blue-500 w-full text-gray-100 py-2 rounded hover:bg-blue-600 transition-colors" name="submit_login">Войти</button>
            </div>
        </form>
    </main>
    <script src="./js/main.js" class="h-32">Email</script>
</body>
</html>