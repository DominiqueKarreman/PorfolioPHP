 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/css/cms.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
     <title>CMS</title>
 </head>

 <body>
     {{-- <div class="wrapper">
        <input type="checkbox" id="btn" hidden>
        <label for="btn" class="menu-btn">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times"></i>
        </label>
        <nav id="sidebar">
          <div class="title">Side Menu</div>
          <ul class="list-items">
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-sliders-h"></i>Clients</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Services</a></li>
            <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
            <li><a href="#"><i class="fas fa-stream"></i>Features</a></li>
            <li><a href="#"><i class="fas fa-user"></i>About us</a></li>
            <li><a href="#"><i class="fas fa-globe-asia"></i>Languages</a></li>
            <li><a href="#"><i class="fas fa-envelope"></i>Contact us</a></li>
            <div class="icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </ul>
        </nav>
      </div>
      <div class="content">
        <div class="header">Animated Side Navigation Menu</div>
        <p>using only HTML and CSS</p>
      </div> --}}

     <nav>
         <div class="logo"> {{ Auth::user()->name }}</div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
             <i class="fas fa-bars"></i>
         </label>
         <ul>
             <li><a class="active" href="#">Home</a></li>
             <li><a href="{{ route('quizes') }}"> Quizes</a></li>
             <li><a href="#">Posts</a></li>

             <li class="nav-item dropdown">




                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </div>
             </li>
         </ul>
     </nav>


 </body>

 </html>
