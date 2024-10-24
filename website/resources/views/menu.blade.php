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

            <li
                class="text-white bg-[#202830] px-12 py-3 border-b-2 border-[#3d444d] hover:bg-[#313c47] hover:cursor-pointer">
                Catégorie</li>
            <li
                class="text-white bg-[#202830] px-12 py-3 border-b-2 border-[#3d444d] hover:bg-[#313c47] hover:cursor-pointer">
                Question</li>
            <li class="text-white bg-[#202830] px-12 py-3 hover:bg-[#313c47] hover:cursor-pointer">Mot</li>
        </ul>
    </header>
    <main class="w-full p-12">
        <section class="bg-[#0d1116] w-3/4 h-3/4 text-white flex items-center flex-col" style="display: none">
            <h1 class="text-2xl text-center w-full border-b-2 border-[#3d444d] p-5">Démarrer</h1>
            <div class="flex flex-col items-center gap-24 mt-16">
                <select class="text-black p-1" name="theme" id="theme-select2">
                    <option value="">Choisissez une catégorie</option>
                    @foreach ($themes as $theme)
                        <option value="{{ $theme->id }}">{{ $theme->theme }}</option>
                    @endforeach
                </select>
                <div>
                    <button class="px-16 py-4 rounded-xl bg-[#202830] hover:bg-[#313c47] hover:cursor-pointer">Lancer</button>
                </div>
            </div>
        </section>

        <section class="bg-[#0d1116] w-3/4 h-3/4 text-white flex items-center flex-col" style="display: none">
            <h1 class="text-2xl text-center w-full border-b-2 border-[#3d444d] p-5">Catégorie</h1>
            <div class="flex flex-col items-center gap-24 mt-16">
                <form action="{{ route('theme.delete') }}" method="POST">
                    @csrf
                    @method('DELETE') {{-- //!!\\ --}}
                    <select class="text-black p-1 px-6 py-2 cursor-pointer" name="theme" id="theme-select1">
                        <option value="">Catégorie</option>
                        @foreach ($themes as $theme)
                            <option value="{{ $theme->id }}">{{ $theme->theme }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="ml-9 px-6 py-2 rounded-xl bg-red-700 hover:bg-red-800">Supprimer</button>
                </form>
                <form id="theme-form" action="{{ route('theme.store') }}" method="POST" data-url="{{ route('theme.store') }}">
                    @csrf
                    <input id="theme" name="theme" class="text-black px-6 py-2" type="text" placeholder="Nom catégorie">
                    <button type="submit" class="ml-9 px-6 py-2 rounded-xl bg-green-700 hover:bg-green-800">Ajouter</button>
                </form>
            </div>
        </section>

        <section class="bg-[#0d1116] w-3/4 h-3/4 text-white flex items-center flex-col" style="display: flex">
            <h1 class="text-2xl text-center w-full border-b-2 border-[#3d444d] p-5">Question</h1>
        </section>

        <section class="bg-[#0d1116] w-3/4 min-h-[67.7vh] h-auto text-white flex items-center flex-col" style="display: none">
            <h1 class="text-2xl text-center w-full border-b-2 border-[#3d444d] p-5">Mot</h1>
            <form id="word-form" action="{{ route('word.store') }}" method="POST" class="mt-16" data-url="{{ route('word.store') }}">
                @csrf
                <input name="word" id="word-input" class="text-black px-6 py-2" type="text" placeholder="Mot">
                <button class="ml-9 px-6 py-2 rounded-xl bg-green-700 hover:bg-green-800" type="submit">Ajouter</button>
            </form>
            <div class="w-full mt-16 p-6">
                <ul class="flex gap-10 flex-wrap">
                    @foreach ($words as $word)
                    <li class="p-4 bg-[#202830] flex items-center gap-3">
                        <p>{{ $word->word }}</p>
                        <form action="{{ route('word.delete', $word->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <img class="w-[30px] h-[30px]" src="{{ asset('medias/images/croix.png') }}" alt="Croix">
                            </button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>

    </main>
    @vite('resources/js/menu.js')
</body>
