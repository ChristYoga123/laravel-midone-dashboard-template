<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>
    @vite(["resources/js/app.js", "resources/css/app.css"])
</head>
<body class="font-poppins">
    <div class="flex flex-col justify-center items-center w-full h-screen gap-10">
        <h1 class="text-2xl text-center font-semibold">Welcome to Laravel MidOne Dashboard Template</h1>
        <div class="flex gap-10">
            <a href="{{ route("dashboard.login.index") }}"><button class="p-5 hover:bg-red-700 hover:scale-110 hover:text-white duration-200 bg-red-500 outline-none rounded-xl font-medium text-lg">Login</button></a>
            <a href="{{ route("dashboard.register.index") }}"><button class="p-5 hover:bg-red-700 hover:text-white hover:scale-110 duration-200 bg-red-500 outline-none rounded-xl font-medium text-lg">Register</button></a>
        </div>
    </div>
</body>
</html>