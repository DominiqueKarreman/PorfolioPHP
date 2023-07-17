    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        {{-- <link rel="stylesheet" href="css/nav.css"> --}}
        <link rel="stylesheet" href="/css/full.css">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- @vite(['/css/app.css','/js/app.js']) --}}
        {{-- @vite([ getcwd() . "/sass/app.scss", 'resources/js/app.js']) --}}
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            clifford: '#da373d',
                        }
                    }
                }
            }
        </script>
        <style type="text/tailwindcss">
            @layer utilities {
                .content-auto {
                    content-visibility: auto;
                }
            }
        </style>
        <link rel="stylesheet" href="/css/photography2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.css"
            integrity="sha512-/AilQf/shuEGfh8c3DoIqcIqHZCKpiImSyt+fxIKJphHiNa6QMPb6AbDly6rkjmGr/5OZd35JtvVkbEKnCZO+A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" integrity="sha512-q54FvbV+gGBn+NvgaD4gpJ7w4wrO00DgW7Rx503PIhrf0CuMwLOwbS+bXgOBFSob+6GVy1HDPfaRLJ8w2jiS4g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullpage.js@3.1.2/dist/fullpage.min.js">
            mix.js('resources/js/app.js', 'public/js')
        </script>
    </head>

    <body style="opacity: 0 transition: 2s ease" class="bg-white dark:bg-zinc-900">
        <nav class="flex shift justify-between flex-row bg-transperent p-5 w-full h-[10vh] absolute z-10">
            <a href=""><img src="/images/logo.svg" class="w-[10vh] relative left-[5vw]" alt=""></a>

            <ul class="flex gap-2 z-10 mr-3 bg-transparent">
                <li class="overflow-hidden2">
                    <a class="drop-in-4 p-2 font-sans text-white italic text-[2rem] font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">Home</a>
                </li>
                <li class="overflow-hidden2">
                    <a class="drop-in-5 p-2 font-sans text-white italic text-[2rem] font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">Portfolio</a>
                </li>
                <li class="overflow-hidden2">
                    <a class="font-sans drop-in-6 p-2 text-white italic text-[2rem] font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">Gear</a>
                </li>
                <li class="overflow-hidden2">
                    <a class="font-sans text-white drop-in-7 p-2 italic text-[2rem] font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">About</a>
                </li>
                <li class="overflow-hidden2">
                    <a class="font-sans text-white italic drop-in-8 p-2 text-[2rem] font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">Contact</a>
                </li>
            </ul>

        </nav>

        <div id="herooDiv"
            style="background-image: url('/images/photography2.jpg'); background-repeat: no-repeat; transition: 1s ease;"
            class="w-full  h-[100vh]">

            <div style="transition: 1.5s ease;" id="overlay-hero"
                class="absolute inset-0 h-[100vh] bg-black opacity-[0.45]">
            </div>
            <div class="absolute justify-center align-center h-[100vh] left-[10vw] flex flex-col gap-2 m-0">


                <div class="overflow-hidden2">

                    <h1 class="drop-in text-white text-left font-black italic leading-tight text-[2rem]">MY
                        NAME IS
                    </h1>
                </div>
                <div class="overflow-hidden2">

                    <h1
                        class=" drop-in-2 leading-tight italic text-left font-black text-transparent bg-clip-text bg-gradient-to-r to-[#fff] from-[#22989F] text-[4rem]">
                        DOMINIQUE KARREMAN</h1>
                </div>
                <div class="overflow-hidden2">

                    <h1 class=" drop-in-3 text-white
                    text-[1.5rem] text-left">And i am a
                        Photo/Videographer
                    </h1>
                </div>

            </div>
        </div>
        <div class="overflow-hidden2">
            <div id="nameTekening" class="absolute w-[100vw] flex flex-col items-center justify-center top-[90vh]"
                style="opacity: 0; transform:translateY(10vh); transition: 2s ease">

                <img src="/images/handtekening.png" class="absolute drop-in-9 bottom-[5vh] w-[15vh]" alt="">
                <h1 id="name" class="drop-in-9 text-white text-[1.5rem] font-black absolute italic">DOMINIQUE
                    KARREMAN</h1>
            </div>
        </div>
        </div>
        <div id="trackBackground" class="">
            <h1 id="recentTitle" style="transition: 1.5s ease; opacity: 0; transform: translateY(10vh)"
                class="font-black text-[2rem] text-black italic p-[3vh] dark:text-white">RECENT WORK</h1>
            {{-- <h1 class="text-white text-xl text-bold middtext">Work</h1> --}}
            <div id="image-track" style="transition: 1.5s ease; transform: translate(50%, 0)" class="mb-[10vh] "
                data-mouse-down-at="0" data-prev-percentage="0">
                <img class="image ml-5" src="/images/DSC03824.jpg" draggable="false" />
                <img class="image" src="/images/esra.jpg" draggable="false" />
                <img class="image" src="/images/IMG_9954.png" draggable="false" />
                <img class="image"src="/images/IMG_9292.png" draggable="false" />
                <img class="image" src="/images/DSC01488.png" draggable="false" />
                <img class="image" src="/images/DSC01118.png" draggable="false" />
                <img class="image" src="/images/DSC00483.png" draggable="false" />
                <img class="image mr-5" src="/images/DSC07340.png" draggable="false" />
            </div>

        </div>
        <div class="bg-black relative w-[100vw] h-[100vh]">

        </div>

        <script src="/js/photography2.js"></script>

    </body>

    </html>
