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

<body>
    <main class="w-full flex items-center justify-center h-screen">
        <div class="main"></div>
        <form id="questionForm" class="flex flex-col w-full items-center justify-center gap-24">
            @csrf
            <h1 class="questionh1 text-white text-3xl">Question : Quel sont les principes du MVC ?</h1>
            <div class="flex w-full items-center justify-around">
                <div class="box">
                    <textarea class="w-[40vw] h-[50vh] p-4 resize-none z-0 bg-[#202830] text-white text-xl rounded-lg" name="question"
                        id="questionInput" rows="10"></textarea>
                </div>
                <div class="box">
                    <textarea class="w-[40vw] h-[50vh] p-4 resize-none z-0 bg-[#202830] text-white text-xl rounded-lg" name=""
                        id="responseOutput" rows="10" disabled placeholder="Réponse et Analyses"></textarea>
                </div>
            </div>
            <button 
                type="submit"
                class="bg-[#202830] text-white px-10 py-5 rounded-2xl transform hover:scale-110 transition duration-200">Envoyer</button>
        </form>






























        <div class="stars">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>
    </main>
    @vite('resources/js/app.js')
</body>

</html>
