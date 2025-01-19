<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Assuming Tailwind CSS is installed -->
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-6">Welcome to Gamebox</h1>
            <p class="mb-6">Enjoy Every Game One at a Time.</p>

            @auth
                <a href="{{ route('dashboard') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Login
                </a>
                <a href="{{ route('register') }}" class="bg-green-500 text-white px-4 py-2 rounded ml-4">
                    Register
                </a>
            @endauth
        </div>
    </div>
</body>
</html>
