
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel = "icon" href =  "image/logotitle.ico"  type = "image/x-icon"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Interior design</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-default,
.btn-default:hover,
.btn-default:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritence from `body` */
  background-color: #fff;
  border: 1px solid #fff;
}

/*
 * Base structure
 */

.cover-heading{
  font-weight: bold;
}

.lead{
  font-weight: bold;
}

html,
body {
  height: 100%;
  
 
}
body {
  color: #fff;
  text-align: center;
  margin: 0;
  padding: 0;
}

/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
  width: 100%;
  height: 643px;
  background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('image/interiordesign.jpg');
}
.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}
.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
  padding: 30px;
  font-weight: bold;
}

.inner-cover{
  text-align: justify;
  padding-top:250px;
  padding-left:250px;
  text-shadow: 0 1px 3px rgba(0,0,0,5);
}

/*
 * Cover
 */

.cover {
  padding: 0 20px;
}
.cover .btn-lg {
  padding: 10px 20px;
  font-weight: bold;
}

/*
 * Affix and center
 */

@media (max-width: 1200px) {
  /* Pull out the header and footer */
  .masthead {
    position:fixed;
    top:0;
  }
}
  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }

  .navbar{
    background-color:black;
    
}

.navbar-brand{
  font-size:30px;
  font-family: 'Nunito';
  font-weight: bold;
 
}
.logo{
  vertical-align: top;
}


/* Blue */
.info {
  border-color: #2196F3;
  color: dodgerblue;
  
}

.info:hover {
  background: rgb(0,0,255,0.15);;
  color: dodgerblue;
}

/* down*/
section {
  color: black;
  text-align: center;
  
}

div {
  height: 100%;
}

article {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 20px;
}

h1 {
  font-size: 1.75rem;
  margin: 0 0 0.75rem 0;
  
}

/* Pattern styles */
.container {
  display: table;
  width: 100%;
}

.left-half {
  background-color: white;
  position: absolute;
  left: 20px;
  width: 50%;
  height: 60%;
  text-align:left;
}

.right-half {
  background-color: white;
  position: absolute;
  right: 20px;
  width: 50%;
  height: 60%;
  text-align:left;
}
    
footer {
  text-align: center;
  padding: 35px;
  background-color: black;
  color: white;
  height:120px; 
}
.dropdown-menu{
  height: 280%;
}

.slider{
  width:1000px;
  height:600px;
  background-image: url("image/1.jpg");
  margin: 100px auto;
  animation: slide 10s infinite;
}

@keyframes slide{
  25%{
    background-image: url("image/2.jpg");
  }
  50%{
    background-image: url("image/3.jpg");
  }
  75%{
    background-image: url("image/4.png");
  }
  100%{
    background-image: url("image/1.jpg");
  }
 
}
.h6{
  color:black;
}
</style>
    </head>


    <body>
    <div class="site-wrapper">
       <div id="app">
          <nav class="navbar fixed-top navbar-expand-md shadow-sm">
             <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="/image/logopic.png" width="45" height="45" alt="">
                INTERIOR DESIGN
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class = "nav-item">
                       <a class="nav-link" href="{{ url('/') }}">{{ __('Home')}}</a>
                    </li>

                    <li class = "nav-item">
                    <a class="nav-link" href="{{ url('/projectviews') }}">{{ __('Project')}}</a>
                    </li>

                    <li class = "nav-item">
                    <a class="nav-link" href="{{ url('/interiordesignview') }}">{{ __('Interior Design')}}</a>
                    </li>

                    <li class = "nav-item">
                    <a class="nav-link" href="{{ url('/cs') }}">{{ __('Contact us')}}</a>
                    </li> 

                    <li class = "nav-item"
                    ><a class="nav-link" href="{{ url('/ab') }}" >{{ __('About us')}}</a>
                    </li> 

             
                        <!-- Authentication Links -->
                        @guest 

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                    <a class="dropdown-item" href="{{ url('/upload') }}">Upload Project</a> 
                                    <a class="dropdown-item" href="{{ route('myupload') }}">My Upload</a> 
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
                        @endguest
                        
                        
                    </ul>
                    <div class=nav-space></div> 
                       <a href="{{ route('login') }}" class="btn info">For Designer</a>
                    
                </div>
               
            </div>
            
        </nav>
      

    <div class="inner-cover">
        <h1 class="cover-heading">Interior Design & Renovation</h1>
           <p class="lead">Upload your design here</p>
             <p class="lead">
               <a href="{{ url('/ab') }}"class="btn btn-lg btn-default">About Us</a>

       
          </div>
    </div>

 </nav>
 <br>
 
 <section class="container">
 
            <div class="left-half">
               <article>
                 <h1>PROJECT</h1>
                   <p>Weekends don't count unless you spend them doing something completely pointless.</p>
                      <a href="{{ url('/projectviews') }}"class="btn btn-lg btn-primary">View Project</a>
              </article>
            </div>

            <div class="right-half">
               <article>
                 <h1>INTERIOR DESIGN</h1>
                    <p>If your knees aren't green by the end of the day, you ought to seriously re-examine your life.</p>
                      <a href="{{ url('/ab') }}"class="btn btn-lg btn-primary">View Design</a>
               </article>
            </div>
            
  </section>
             
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br>  
  
                   
            <div class="slider"></div>

            <footer>
               <p>Author: PROJECT<br>
                  <a href="mailto:interiordesign@gmail.com">interiordesign@gmail.com</a></p>
           </footer>

     </body>
</html>
