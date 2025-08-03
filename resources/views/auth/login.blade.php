<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <form method="POST" action="{{ route('login') }}" class="p-6 bg-white shadow-md rounded-lg">
        @csrf
        <h2 class="mb-4 text-xl font-bold">Login</h2>
        <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-2 border rounded">
        <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-2 border rounded">
        <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded">Login</button>
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Belum mempunyai akun? 
                <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Register</a>
            </p>
        </div>
    </form>
</body>
</html>