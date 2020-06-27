<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-full">
    <form method="POST" action="/contact" class="bg-white p-6 rounded shadow-md" style="widht:300px">
        @csrf
        <div class="mb-5">
            <label for="email" class="block text-xs uppercase font-semibold mb-1">
                Email Address
            </label>
            <input type="text" name="email" id="email" class="border px-2 py-1 text-sm w-full">
        </div>
        <button type="submit" class="bg-blue500 py-2 text-white rounded-full text-sm w-full">
            Email me
        </button>
        @if (session('message'))
            <p>{{ session('message')}}</p>
        @endif
    </form>
</body>
</html>