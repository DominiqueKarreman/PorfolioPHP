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
    <div id="fullpage">
        <div id="main" class="section s1">
            <div class="topBar flex flex-row w-full h-[10vh]  absolute inset-0 justify-between">
                <img class="logo h-[15vh]" src="{{ asset('images/logo.svg') }}" alt="">
                <a class="m-5  text-white customBorder" href="#">Contact</a>
            </div>
            <div class="hero">
                <span>
                    <h1>DK Visuals</h1>
                    <h1>Photography</h1>
                </span>
            </div>
            <div id="menu" class="menu flex h-[50vh] w-[80vh] float-right justify-end text-right mr-5">
                <ul class="flex justify-between flex-row flex-wrap text-right ">
                    <li data-menuanchor="Home"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><a
                            data-text="Home" class=" text-[6vh] drop" href="#main">Home</a></li>
                    <li
                        data-menuanchor="About"class="h-[5vh] flex items-center w-full text-right justify-end place-content-end">
                        <a data-text="Work" class="text-[6vh] drop" href="#2">Work</a>
                    </li>
                    <li data-menuanchor="Skills"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><a
                            data-text="About" class="text-[6vh] drop" href="#3">About</a></li>
                    <li data-menuanchor="Skills"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><a
                            data-text="Timeline" class="text-[6vh] drop" href="#3">Timeline</a></li>
                    <li data-menuanchor="Skills"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><a
                            data-text="Gear" class="text-[6vh] drop" href="#3">Gear</a></li>
                    <li data-menuanchor="Skills"
                        class="h-[5vh] relative flex items-center w-full text-right justify-end place-content-end"><a
                            data-text="Hire" class="text-[6vh] drop" href="#3">Hire</a></li>

                </ul>
            </div>
        </div>
        <div id="2" class="section s2 flex center midd">
            <h1 class="text-white text-xl text-bold middtext">Section 2</h1>
        </div>
        <div id="3" class="section s3">
            <h1>Section 3</h1>
        </div>
    </div>
    <script src="{{ asset('js/fullpage.js') }}"></script>
</body>
</html>
