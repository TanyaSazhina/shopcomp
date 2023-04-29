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
    <label class="text-gray-700">Логин</label>
    <input class="w-full py-2 bg-gray-50 text-gray-700 px-1 outline-none mb-4" type="text" name = "login" required placeholder="Введите логин">
    <label class="text-gray-700">Email</label>
    <input class="w-full py-2 bg-gray-50 text-gray-700 px-1 outline-none mb-4" type="email" name = "email" required placeholder="Введите e-mail">
    <label class="text-gray-700">Пароль</label>
    <input class="w-full py-2 bg-gray-50 text-gray-700 px-1 outline-none mb-4" type="password" name = "password" required placeholder="Введите пароль">
    <label class="text-gray-700">Подтвердите пароль</label>
    <input class="w-full py-2 bg-gray-50 text-gray-700 px-1 outline-none mb-4" type="password" name = "repassword" required placeholder="Подтвердите пароль">
    <button class="bg-blue-500 w-full text-gray-100 py-2 rounded hover:bg-blue-600 transition-colors"" type="submit" name="submit_reg">Зарегистрировать</button>
    <br>
</div>
    </form>
    </main>
    <!-- <script src="./js/main.js" class="h-32">Email</script> -->
</body>
</html>