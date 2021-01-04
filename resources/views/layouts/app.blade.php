<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel = "icon" href =  "image/logotitle.ico"  type = "image/x-icon"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('Interior Design') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    .navbar{
    background-color:black;
    color: white;
    
  }
    a,
    a:focus,
    a:hover {
     color: #fff;
     color: white;
}
.navbar,
.navbar:focus,
.navbar:hover{
    color: #fff;
     color: white;
     
}
.logo{
  vertical-align: top;
}
.site-wrapper {
  display: table;
  width: 100%;
  height: 642px;
  background-image: url('image/interior.jpg');
  
  /*height: 100%; */
  /*min-height: 100%;*/
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
  padding:200px;
  text-shadow: 0 1px 3px rgba(0,0,0,5);
}

.cover-heading{
  font-weight: bold;
  color:white;
}

.lead{
  font-weight: bold;
  color:white;
}
</style>

<!-- contact css -->
<style>


body.contact {
   background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url('image/interiorbg.jpg');
}

.contact-container {
   max-width:400px;
   width:100%;
   margin:0 auto;
   position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
   background:white;
   padding:25px;
   margin:85px 0;
}

#contact h3 {
   color: black;
   display: block;
   font-size: 30px;
   font-weight: 400;
}

#contact h4 {
   margin:5px 0 15px;
   display:block;
   font-size:13px;
}

fieldset {
   border: medium none !important;
   margin: 0 0 10px;
   min-width: 100%;
   padding: 0;
   width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
   width:100%;
   border:1px solid #CCC;
   background:#FFF;
   margin:0 0 5px;
   padding:5px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
   -webkit-transition:border-color 0.3s ease-in-out;
   -moz-transition:border-color 0.3s ease-in-out;
   transition:border-color 0.3s ease-in-out;
   border:1px solid #AAA;
}

#contact textarea {
   height:100px;
   max-width:100%;
   resize:none;
}

#contact button[type="submit"] {
   cursor:pointer;
   width:100%;
   border:none;
   background:#0CF;
   color:#FFF;
   margin:0 0 5px;
   padding:10px;
   font-size:15px;
} 

#contact button[type="submit"]:hover {
   background:#09C;
   -webkit-transition:background 0.3s ease-in-out;
   -moz-transition:background 0.3s ease-in-out;
   transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
   outline:0;
   border:1px solid #999;
}
::-webkit-input-placeholder {
color:#888;
}
:-moz-placeholder {
color:#888;
}
::-moz-placeholder {
color:#888;
}
:-ms-input-placeholder {
color:#888;
}

</style>

<!--navbar-->
<style>

.navbar-brand{
  font-size:30px;
  font-family: 'Nunito';
  font-weight: bold;
}

.info {
  border-color: #2196F3;
  color: dodgerblue;
 
}

.info:hover {
  background: rgb(0,0,255,0.15);;
  color: dodgerblue;
  
}
}
</style>


<!-- upload css -->
<style>
.upload-container{
    margin: 0 auto;
    max-width:400px;
}

input.form-control {
    width: 20em;  height: 3em;
    display: inline-block;
    vertical-align: top;
}

input.Insert {
    width: 20em;  height: 2em;
    color:
}
#size{
    width: 20em;  height: 2em;
}
#description{
    width: 20em;  height: 8em;
}
#style{
    width: 20em;  height: 2em;
}
#budget{
    width: 20em;  height: 2em;
}
#location{
    width: 20em;  height: 2em;
}
</style>

   <!-- about css -->    
<style>
body.about{
    margin: 0 ;
    padding: 0;
    box-sizing: border-box;
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    
}

.about-section{
    background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("image/aboutpic.jpg") no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
   
    
}

.inner-container-about{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 180px;
}

.inner-container-about h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text-about{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills-about{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container-about{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container-about{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container-about{
        padding: 60px;
    }
}
body{
    text-align:center;
}
</style>

<style>
  .login{
    padding-top:100px;
}
.register{
    padding-top:80px;
}
.upload{
    padding-top:50px;
}
.my-upload{
    padding-top:55px;
}
</style>
</head>

<body>

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
                    <a class="nav-link" href="#">{{ __('Interior Design')}}</a>
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
                       <button class="btn info">For Designer</button>
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
