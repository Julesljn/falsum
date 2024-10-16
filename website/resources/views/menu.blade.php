<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="flex">
    <div class="main"></div>
    <header class="bg-[#0d1116] h-screen w-96">
        <ul>
            <li class="text-white bg-[#202830] px-12 py-3 mb-8 hover:bg-[#313c47] hover:cursor-pointer">Démarrer</li>

            <li class="text-white bg-[#202830] px-12 py-3 border-b-2 border-[#3d444d] hover:bg-[#313c47] hover:cursor-pointer">Catégorie</li>
            <li class="text-white bg-[#202830] px-12 py-3 border-b-2 border-[#3d444d] hover:bg-[#313c47] hover:cursor-pointer">Question</li>
            <li class="text-white bg-[#202830] px-12 py-3 hover:bg-[#313c47] hover:cursor-pointer">Mot</li>
        </ul>
    </header>
    <main class="w-full p-12">
        <section class="bg-[#0d1116] w-3/4 h-3/4 text-white flex items-center flex-col" style="display: flex">
            <h1 class="text-2xl text-center w-full border-b-2 border-[#3d444d] p-5">Démarrer</h1>
        </section>

        <section class="bg-[#0d1116] w-3/4 h-3/4 text-white flex items-center flex-col" style="display: none">
            <h1 class="text-2xl text-center w-full border-b-2 border-[#3d444d] p-5">Catégorie</h1>
        </section>

        <section class="bg-[#0d1116] w-3/4 h-3/4 text-white flex items-center flex-col" style="display: none">
            <h1 class="text-2xl text-center w-full border-b-2 border-[#3d444d] p-5">Question</h1>
        </section>

        <section class="bg-[#0d1116] w-3/4 h-3/4 text-white flex items-center flex-col" style="display: none">
            <h1 class="text-2xl text-center w-full border-b-2 border-[#3d444d] p-5">Mot</h1>
        </section>

    </main>
    @vite('resources/js/menu.js')
</body>