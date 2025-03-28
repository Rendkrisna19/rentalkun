<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-4">Login Admin</h2>
        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block">Username</label>
                <input type="text" name="username" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label class="block">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded-lg">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg">Login</button>
        </form>
    </div>
</body>
</html>
