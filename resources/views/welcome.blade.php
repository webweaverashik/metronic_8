<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <!-- Include the app's CSS file (optional if using Laravel Mix) -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Laravel 11</h1>
            <p class="mb-4">This is the default view for a new Laravel application.</p>
            <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Go to Dashboard</a>
        </div>
    </div>
</body>
</html>
