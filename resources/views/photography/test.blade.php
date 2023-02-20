<head>
    <!-- Other meta tags and stylesheets go here -->
    <script src="https://cdn.jsdelivr.net/npm/fullpage.js@3.1.2/dist/fullpage.min.js">
    mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');</script>
<link rel="stylesheet" href="/css/full.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" integrity="sha512-q54FvbV+gGBn+NvgaD4gpJ7w4wrO00DgW7Rx503PIhrf0CuMwLOwbS+bXgOBFSob+6GVy1HDPfaRLJ8w2jiS4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<div id="fullpage">
    <div class="section">
        <h1>Section 1</h1>
    </div>
    <div class="section">
        <h1>Section 2</h1>
    </div>
    <div class="section">
        <h1>Section 3</h1>
    </div>
    <ul id="myMenu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First section</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">Second section</a></li>
        <li data-menuanchor="thirdPage"><a href="#thirdPage">Third section</a></li>
        <li data-menuanchor="fourthPage"><a href="#fourthPage">Fourth section</a></li>
    </ul>
</div>
<div id="dasd">
    <div class="section">
        <h1>Section 1</h1>
    </div>
    <div class="section">
        <h1>Section 2</h1>
    </div>
    <div class="section">
        <h1>Section 3</h1>
    </div>
</div>


<script src="{{ asset('js/fullpage.js') }}"></script>
