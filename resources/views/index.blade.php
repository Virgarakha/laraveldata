<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="relative">
    <div class="w-full bg-black h-16 flex justify-start pl-5 items-center gap-4">
        <a href="{{ route('dashboard/siswa') }}" class="text-white decoration-none">Data Siswa</a>
        <a href="{{ route('dashboard/guru') }}" class="text-white">Data Guru</a>
        <a href="{{ route('dashboard/galery') }}" class="text-white">Galeri</a>
    </div>

    <main>
        @yield('content')
    </main>
</body>

</html>