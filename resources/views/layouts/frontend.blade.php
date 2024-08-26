<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
            <div class="container">
                <a class="navbar-brand fw-bold fs-5" href="{{route('front.index')}}"><span><img src="https://t3.ftcdn.net/jpg/04/91/76/62/360_F_491766294_h4j7LbW2YgfbNHhq7F8GboIc1XyBSEY5.jpg" alt="" style="width:55px; height:55px;" class="me-3"></span>MIT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small">
                        <li class="nav-item me-2"><a class="nav-link " href="{{route('front.index')}}">Home</a></li>
                        
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" role="button" href="{{route('front.academic')}}">Academic</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="{{route('front.academic')}}" class="dropdown-item small">Undergraduate</a></li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li><a href="{{route('front.academic')}}" class="dropdown-item small">Postgraduate</a></li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li><a href="{{route('front.scholarship')}}" class="dropdown-item small">Scholarship</a></li>
                                
                        </ul>
                    
                        </li>
                        <li class="nav-item me-2"><a class="nav-link " aria-current="page" href="{{route('front.newsnevent')}}">News & Events</a></li>
                        <li class="nav-item dropdown me-2"><a class="nav-link " href="{{route('front.campuslife')}}">Campus Life</a>
                        <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#categorySection">Accommodation</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                
                               
                                    <li><a class="dropdown-item" href="">Sports</a></li>
                        </ul> -->
                    
                        </li>
                        <li class="nav-item me-2"><a class="nav-link " href="{{route('front.application')}}">Apply Now</a></li>
                        <li class="nav-item me-2"><a class="nav-link " href="#!">About Us</a></li>
                      
                            <a href="/login" class="btn btn-light rounded-pill px-4 mx-2">Login</a>
                            <a href="/register" class="btn btn-outline-dark rounded-pill">Register</a>
                       
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
       @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; University Website 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('frontend/js/scripts.js')}}"></script>
    </body>
</html>
