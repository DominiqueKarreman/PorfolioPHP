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
    <link rel="stylesheet" href="/css/full.css">
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

<body>
    <div id="backToTop"  class="backToTop">
        <button style="opacity: 0%; transition: 1s;" id="top">Back to top</button>
    </div>
    <div id="fullpage">
        <div id="Home" class="section s1">
            <div class="topBar flex flex-row w-full h-[10vh]  absolute inset-0 justify-between">
                <img class="logo h-[15vh]" src="{{ asset('images/logo.svg') }}" alt="">
                <a class="m-5  hidden md:flex text-white customBorder" href="#">Contact</a>
                <div class="flex md:hidden">
                    <button id="hamburger" type="button"
                        class="z-20 inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden dark:text-gray-400">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-8 h-8" aria-hidden="true" fill="white" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div id="navbar-cta" style="opacity: 0%; height: 0px;" class=" navMD">
                    <ul>
                        <li>
                           <a  class="text-white text-[5vh]" href="#">Contact</a> 
                        </li>
                      
                    </ul>
                </div>
            </div>
            <div class="hidden sm:flex hero">
                <span>
                    <h1>DK Visuals</h1>
                    <h1>Photography</h1>
                </span>
            </div>
            <div class="heroSM sm:hidden mr-5">
                <span>
                    <h1>DK Visuals</h1>
                    {{-- <h1>Photography</h1> --}}
                </span>
            </div>
            <div  class="menu flex h-[50vh] sm:h-[45vh] w-[80vh] float-right justify-end text-right mr-5">
                <ul id="menu" class="flex justify-between flex-row flex-wrap text-right ">
                    <li data-menuanchor="Home"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><button 
                            data-text="Home" class="menuButton  text-[6vh] drop">Home</button></li>
                    <li
                        data-menuanchor="About"class="h-[5vh] flex items-center w-full text-right justify-end place-content-end">
                        <button data-text="Work" class="menuButton text-[6vh] drop">Work</button>
                    </li>
                    <li data-menuanchor="Skills"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><button 
                            data-text="About" class="menuButton text-[6vh] drop">About</button></li>
                    <li data-menuanchor="Skills"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><button 
                            data-text="Timeline" class="menuButton text-[6vh] drop">Timeline</button></li>
                    <li data-menuanchor="Skills"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><button 
                            data-text="Gear" class="menuButton text-[6vh] drop">Gear</button></li>
                    <li data-menuanchor="Skills"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><button 
                            data-text="Hire" class="menuButton text-[6vh] drop">Hire</button></li>

                </ul>
            </div>
        </div>
        <div id="Work" class="section s2 flex center midd">
            {{-- <h1 class="text-white text-xl text-bold middtext">Work</h1> --}}
            <div data-mouse-down-at="0" data-prev-percentage="0" data-prev-percentage-slow="0" data-mouse-down-at-slow="0" class="image-track">
                <h1 class="workHero">Work</h1>
                <p class="workBody">Here is my work, this is the best of the best. The ones i am most proud of </p>
                <button class="workButton">Go to portfolio</button>
                <h1 class="workTitle">My work</h1>
                <img class="image" src="https://images.unsplash.com/photo-1677058569213-60d147e56d4a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" draggable="false" alt="">
                <img class="image" src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" draggable="false" alt="">
                <img class="image" src="https://images.unsplash.com/photo-1594568284297-7c64464062b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" draggable="false" alt="">
                <img class="image" src="https://images.unsplash.com/photo-1603486002664-a7319421e133?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1542&q=80" draggable="false" alt="">
                <img class="image" src="https://images.unsplash.com/photo-1599454100789-b211e369bd04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1606&q=80" draggable="false" alt="">
                <img class="image" src="https://images.unsplash.com/photo-1573523765924-e6c704ce8048?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" draggable="false" alt="">
                <img class="image" src="https://images.unsplash.com/photo-1595835018349-198460e1d309?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80" draggable="false" alt="">
                <img class="image" src="https://images.unsplash.com/photo-1567196884944-1b4b8f630560?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" draggable="false" alt="">
            </div>

        </div>
        <div id="About" class="section s3">
            <h1>About</h1>
        </div>
        <div id="Timeline" class="section s4">
            <h1>Timeline</h1>
        </div>
        <div id="Gear" class="section s5">
            <h1>Gear</h1>
        </div>
        <div id="Hire" class="section s6">
            <h1>Hire</h1>
        </div>
    </div>
    <script src="{{ asset('js/fullpage.js') }}"></script>
</body>

</html>
