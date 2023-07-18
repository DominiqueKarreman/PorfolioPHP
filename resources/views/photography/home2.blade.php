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
        {{-- <link rel="stylesheet" href="/css/full.css"> --}}

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

    <body style="opacity: 0 transition: 2s ease" class="bg-white dark:bg-black">
        <nav class="flex shift justify-between flex-row bg-transperent p-5 w-full h-[10vh] fixed z-10">
            <a href=""><img src="/images/logo.svg" class="w-[10vh] relative left-[5vw]" alt=""></a>

            <ul class="flex gap-2 z-10 mr-3 bg-transparent">
                <li class="overflow-hidden2">
                    <a class="drop-in-4 p-2 font-sans text-white italic text-[2rem] navItem font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">Home</a>
                </li>
                <li class="overflow-hidden2">
                    <a class="drop-in-5 p-2 font-sans text-white italic text-[2rem] navItem font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">Portfolio</a>
                </li>
                <li class="overflow-hidden2">
                    <a class="font-sans drop-in-6 p-2 text-white italic text-[2rem] navItem font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">Gear</a>
                </li>
                <li class="overflow-hidden2">
                    <a class="font-sans text-white drop-in-7 p-2 italic text-[2rem] navItem font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">About</a>
                </li>
                <li class="overflow-hidden2">
                    <a class="font-sans text-white italic drop-in-8 p-2 text-[2rem] navItem font-black"
                        style="font-family: 'Roboto Condensed', sans-serif;" href="/">Contact</a>
                </li>
            </ul>

        </nav>

        <div id="herooDiv"
            style="background-image: url('/images/photography2.jpg'); background-repeat: no-repeat; transition: 1s ease;"
            class="w-full  overflow-y-hidden h-[100vh]">

            <div style="transition: 1.5s ease;" id="overlay-hero"
                class="relative  inset-0 h-[100vh] bg-black opacity-[0.45]">
            </div>
            <div
                class="relative w-[80vw] top-[-95vh] justify-center align-center h-[90vh] left-[10vw] flex flex-col gap-2 m-0">


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
                <div class="overflow-hidden2 mt-[20vh] mb-[-30vh]">
                    <div id="nameTekening" class=" flex flex-col items-center justify-center top-[60vh]"
                        style="opacity: 0; transform:translateY(10vh); transition: 2s ease">

                        <img src="/images/handtekening.png" class=" drop-in-9 bottom-[5vh] w-[15vh]" alt="">
                        <h1 id="name" class="drop-in-9 text-white text-[1.5rem] font-black italic">DOMINIQUE
                            KARREMAN</h1>
                    </div>
                </div>
            </div>

        </div>

        </div>
        <div id="trackBackground" class="bg-zinc-300 pb-[3vh] dark:bg-zinc-900">
            <h1 id="recentTitle" style="transition: 1.5s ease; opacity: 0; transform: translateY(10vh)"
                class="font-black text-[2rem] text-black italic p-[3vh] dark:text-white">RECENT WORK</h1>
            {{-- <h1 class="text-white text-xl text-bold middtext">Work</h1> --}}
            <div id="image-track" style="transition: 1.5s ease; transform: translate(50%, 0); opacity: 0;"
                class="mb-[10vh] " data-mouse-down-at="0" data-prev-percentage="0">
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
        <div id="activityDiv"
            class="bg-white dark:bg-black relative  gap-[5vh] flex flex-row   justify-around p-[5vh] pt-[5vh]  relative w-[100vw] h-[100vh]">
            <div style="opacity: 0; transition: 1s ease; transform: translateY(10vh)"
                class="activitySub flex flex-col items-center align-center  w-1/3">
                <svg class="hidden dark:flex" xmlns="http://www.w3.org/2000/svg" height="48" fill="white"
                    viewBox="0 -960 960 960" width="48">
                    <path
                        d="M454-602h345q-28-74-89-130.5T571-810L454-602Zm-93 83 174-299q-12-1-27-1.5t-28-.5q-72 0-132 26t-108 72l121 203ZM150-393h237L217-696q-38 45-57.5 100.5T140-480q0 21 2 44t8 43Zm240 242 120-207H162q28 74 88.5 130.5T390-151Zm90 11q72 0 132.5-26T720-238L600-441 425-142q13 1 27.5 1.5t27.5.5Zm264-124q34-42 55-99t21-117q0-22-2-44.5t-7-43.5H574l170 304ZM480-480Zm0 400q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Z" />
                </svg>
                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" height="48" fill="black"
                    viewBox="0 -960 960 960" width="48">
                    <path
                        d="M454-602h345q-28-74-89-130.5T571-810L454-602Zm-93 83 174-299q-12-1-27-1.5t-28-.5q-72 0-132 26t-108 72l121 203ZM150-393h237L217-696q-38 45-57.5 100.5T140-480q0 21 2 44t8 43Zm240 242 120-207H162q28 74 88.5 130.5T390-151Zm90 11q72 0 132.5-26T720-238L600-441 425-142q13 1 27.5 1.5t27.5.5Zm264-124q34-42 55-99t21-117q0-22-2-44.5t-7-43.5H574l170 304ZM480-480Zm0 400q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Z" />
                </svg>
                <h1
                    class=" flex flex-col text-black text-center align-center justify-center dark:text-white font-black text-[2rem]  italic">
                    Photography</h1>
                <p class="text-black dark:text-white text-center">Lorem ipsum
                    dolor sit amet, consectetur adipiscing
                    elit. Proin a lacinia nisl, a
                    viverra felis. Proin
                    libero libero, imperdiet dignissim mauris id, iaculis laoreet arcu. Nam eu tempus dui. Sed fermentum
                    convallis fermentum. Integer luctus lacus quis odio faucibus, ac bibendum nisl condimentum.
                    Pellentesque a justo pretium, posuere diam eget, vestibulum ligula. Nulla facilisi. Curabitur in
                    lacus sapien. Sed efficitur arcu et enim cursus, vitae volutpat nibh sollicitudin. Quisque a odio
                </p>
            </div>
            <div style="opacity: 0; transition: 1s ease; transform: translateY(10vh)"
                class="activitySub flex flex-col items-center align-center  w-1/3">
                <svg class="hidden dark:flex" xmlns="http://www.w3.org/2000/svg" fill="white" height="48"
                    viewBox="0 -960 960 960" width="48">
                    <path
                        d="M140-160q-24 0-42-18t-18-42v-520q0-24 18-42t42-18h520q24 0 42 18t18 42v215l160-160v410L720-435v215q0 24-18 42t-42 18H140Zm0-60h520v-520H140v520Zm0 0v-520 520Z" />
                </svg>
                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" fill="black" height="48"
                    viewBox="0 -960 960 960" width="48">
                    <path
                        d="M140-160q-24 0-42-18t-18-42v-520q0-24 18-42t42-18h520q24 0 42 18t18 42v215l160-160v410L720-435v215q0 24-18 42t-42 18H140Zm0-60h520v-520H140v520Zm0 0v-520 520Z" />
                </svg>
                <h1
                    class=" flex flex-col text-black text-center align-center justify-center dark:text-white font-black text-[2rem]  italic">
                    Videographer</h1>
                <p class="text-black dark:text-white text-center">Lorem ipsum
                    dolor sit amet, consectetur adipiscing
                    elit. Proin a lacinia nisl, a
                    viverra felis. Proin
                    libero libero, imperdiet dignissim mauris id, iaculis laoreet arcu. Nam eu tempus dui. Sed fermentum
                    convallis fermentum. Integer luctus lacus quis odio faucibus, ac bibendum nisl condimentum.
                    Pellentesque a justo pretium, posuere diam eget, vestibulum ligula. Nulla facilisi. Curabitur in
                    lacus sapien. Sed efficitur arcu et enim cursus, vitae volutpat nibh sollicitudin. Quisque a odio
                </p>
            </div>
            <div style="opacity: 0; transition: 1s ease; transform: translateY(10vh)"
                class="activitySub flex flex-col items-center align-center  w-1/3">
                <svg class="hidden dark:flex" fill="white" xmlns="http://www.w3.org/2000/svg" height="48"
                    viewBox="0 -960 960 960" width="48">
                    <path
                        d="M140-200q-24 0-42-18t-18-42v-520q0-24 18-42t42-18l74 152h130l-74-152h89l74 152h130l-74-152h89l74 152h130l-74-152h112q24 0 42 18t18 42v208h-60v-56H140v368h368v60H140Zm604-243 28 28-164 164v51h51l164-164 28 28-176 176H568v-107l176-176Zm107 107L744-443l61-61q9-9 21-9t21 9l65 65q9 9 9 21t-9 21l-61 61Z" />
                </svg>
                <svg class="dark:hidden" fill="black" xmlns="http://www.w3.org/2000/svg" height="48"
                    viewBox="0 -960 960 960" width="48">
                    <path
                        d="M140-200q-24 0-42-18t-18-42v-520q0-24 18-42t42-18l74 152h130l-74-152h89l74 152h130l-74-152h89l74 152h130l-74-152h112q24 0 42 18t18 42v208h-60v-56H140v368h368v60H140Zm604-243 28 28-164 164v51h51l164-164 28 28-176 176H568v-107l176-176Zm107 107L744-443l61-61q9-9 21-9t21 9l65 65q9 9 9 21t-9 21l-61 61Z" />
                </svg>
                <h1
                    class=" flex flex-col text-black text-center align-center justify-center dark:text-white font-black text-[2rem]  italic">
                    Video/Photo editing</h1>
                <p class="text-black dark:text-white text-center">Lorem ipsum
                    dolor sit amet, consectetur adipiscing
                    elit. Proin a lacinia nisl, a
                    viverra felis. Proin
                    libero libero, imperdiet dignissim mauris id, iaculis laoreet arcu. Nam eu tempus dui. Sed fermentum
                    convallis fermentum. Integer luctus lacus quis odio faucibus, ac bibendum nisl condimentum.
                    Pellentesque a justo pretium, posuere diam eget, vestibulum ligula. Nulla facilisi. Curabitur in
                    lacus sapien. Sed efficitur arcu et enim cursus, vitae volutpat nibh sollicitudin. Quisque a odio
                </p>
            </div>

        </div>

        <script src="/js/photography2.js"></script>
    </body>
    <footer class="absolute self-center top-[300vh]">
        <h1 class="text-white z-50 text-[55vh]">test</h1>
    </footer>

    </html>
