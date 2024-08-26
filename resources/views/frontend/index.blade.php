@extends('layouts.frontend')
@section('content')
        <!-- Page header with logo and tagline-->
        <header class="mb-5">
                <!-- <div class="container-fluid">
                    <img src="https://i0.wp.com/www.nylon.com.sg/wp-content/uploads/2023/01/uniqlo-u-ss23-banner-scaled.jpg?fit=2560%2C990&quality=89&ssl=1" alt="" class="img-fluid">
                </div> -->
                <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://www.gla.ac.uk/media/Media_772657_smxx.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 40%; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block text-start mb-5">
                            <h1>Welcome to our university!</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repudiandae necessitatibus vel magni consequuntur dolorum, facere provident eius aspernatur porro deserunt, labore in officiis </p> -->
                        </div>
                        </div>

                        <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfNqX_0mwUgdniNRtnKTsezeaOhRhW8_0qWWMUmVE-97INc_kI9O7AsXOXPdNLUfgKQAg&usqp=CAU" class="d-block w-100" alt="..." style="width: 100%; height:  40%; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block text-start mb-5">
                            <h1>Join the major you want!</h1> 
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repudiandae necessitatibus vel magni consequuntur dolorum, facere provident eius aspernatur porro deserunt, labore in officiis </p> -->
                        </div>
                        </div>
                        
                        <div class="carousel-item">
                        <img src="https://www.brown.edu/sites/default/files/styles/wide_lrg/public/2019-03/20111102_CampusScenes-PAUR-01_2_0.jpg?h=e550a542&itok=ABSpRUBY" class="d-block w-100" alt="..." style="width: 100%; height:  40%; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block text-start">
                            <h1>Try to be graduated!</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repudiandae necessitatibus vel magni consequuntur dolorum, facere provident eius aspernatur porro deserunt, labore in officiis </p> -->
                        </div>
                        </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            
                    
            <!-- <div class="container px-4 px-lg-5 my-5">
                
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div> -->
        </header>
        <!-- Academic container  -->
         <div class="container mb-4 mt-4">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-3">
                    <div class="card px-3 py-3 bg-dark">
                        <div class="inline"><span class="fw-bold fs-5 text-light">Undergratuate</span>
                            <div class="float-end">
                                <a href="" class="btn btn-outline-light btn-sm me-2">Find more</a>
                                
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card px-3 py-3 bg-dark">
                        <div class="inline"><span class="fw-bold fs-5 text-light">Postgratuate</span>
                            <div class="float-end">
                                <a href="" class="btn btn-outline-light btn-sm me-2">Find more</a>
                                
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="container mb-5 text-center">
            <div class="mini_menu">
            
                <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill mini_btn me-4 my-1 px-3">All</button>
                <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill mini_btn me-4 my-1 px-3">Education</button>
                <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill mini_btn me-4 my-1 px-3">Alumni</button>
                <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill mini_btn me-4 my-1 px-3">Announcements</button>
                <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill mini_btn me-4 my-1 px-3">Activites</button>
                <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill mini_btn me-4 my-1 px-3">Research</button>

            </div>
        </div>

        <!-- bachelor degree  -->
         <div class="container my-3 mb-4">
            <!-- <div class="row">
                <div class="col col-sm-1 col-md-3 ">
                    <div class="card text-bg-dark">
                        <img src="https://www.gla.ac.uk/media/Media_772657_smxx.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div> -->
            <h2 class="text-center mb-4">Academics</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                    <img src="https://www.gla.ac.uk/media/Media_772657_smxx.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Undergratuate Program</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVU0fruVeoYnLesj4M2vz9DAT7USZKoEj5ufLKFljK6WS0It9XaeRzPCOuOxw6BCuEGT8&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Postgraduate Program</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVU0fruVeoYnLesj4M2vz9DAT7USZKoEj5ufLKFljK6WS0It9XaeRzPCOuOxw6BCuEGT8&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Master Degree</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="https://www.gla.ac.uk/media/Media_772657_smxx.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Scholarship</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                
                
                
            </div>
            <hr>
         </div>


         <!-- New and Event section  -->
          <div class="container my-4">
            <h2>News & Events</h2>
            <div class="row row-cols-1 row-cols-md-3 mt-3">
                <div class="col">
                    <div class="card p-2 mb-3 shadow">
                        <img src="https://media.istockphoto.com/id/2022278899/photo/student-friendship-concept-with-diverse-classmate-friends-sitting-on-campus-park.webp?b=1&s=170667a&w=0&k=20&c=lG0V6bhKMJMNAVcRLbimdJ28K9HBtKUXu9HYSx3QYa4=" alt="" class="card-img">
                        <div class="card-body">
                            <h4 class="fw-bold">News Name</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error explicabo consectetur animi praesentium nihil tempora harum architecto ipsam tenetur odio ipsum id, qui voluptatum ea consequatur culpa quos eligendi quasi.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 mb-3 shadow">
                        <img src="https://media.istockphoto.com/id/618553808/photo/students-outdoor-with-books.jpg?s=612x612&w=0&k=20&c=zutujEFKapAF3PKv_OEbMQYLd_6p3oY7uZDZdLzZAO0=" alt="" class="card-img">
                        <div class="card-body">
                            <h4 class="fw-bold">News Name</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error explicabo consectetur animi praesentium nihil tempora harum architecto ipsam tenetur odio ipsum id, qui voluptatum ea consequatur culpa quos eligendi quasi.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 mb-3 shadow">
                        <img src="https://media.gettyimages.com/id/114727959/photo/cap-and-gown.jpg?s=612x612&w=gi&k=20&c=ByoLR9ZDLXWu1P1WOcoH6R46WwQhQwc30xY6NZpXd8A=" alt="" class="card-img">
                        <div class="card-body">
                            <h4 class="fw-bold">News Name</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error explicabo consectetur animi praesentium nihil tempora harum architecto ipsam tenetur odio ipsum id, qui voluptatum ea consequatur culpa quos eligendi quasi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
          </div>

          <!-- facilities section  -->
        <div class="container-fluid px-3 mb-4">
            <section class="facilities text-center">
                <h1>Our Facilities</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            
                <div class="row row-cols-1 row-cols-md-3 mt-4">
                    <div class="facilities-col col text-center p-3">
                        <img src="https://muscatcollege.edu.om/wp-content/uploads/2021/10/facilities-library-1.jpg" alt="" class="card-img   shadow mb-3">
                        <h3>World Class Library</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam debitis tempore aliquid iusto laudantium neque</p>
                    </div>
                    <div class="facilities-col col text-center">
                        <img src="https://cdn.theathletic.com/cdn-cgi/image/width=1200,height=1200,fit=cover/app/uploads/2024/05/15170401/EAS_CFB25_SE_KeyArt_Horz_RGB-e1715807079444.png" alt="" class="card-img shadow mb-3">
                        <h3>Sport Events</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam debitis tempore aliquid iusto laudantium neque</p>
                    </div>
                    <div class="facilities-col col text-center p-3">
                        <img src="https://media.istockphoto.com/id/1411322814/photo/happy-women-eating-at-a-buffet-style-cafeteria.jpg?s=612x612&w=0&k=20&c=YXK6DGEct3j4ckVGH4I5Bh9TCv86gQDPR1otiCXQMA4=" alt="" class="card-img shadow mb-3">
                        <h3>Tasty and Healthy Food</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam debitis tempore aliquid iusto laudantium neque</p>
                    </div>
            
                </div>
            
            </section>
        </div> 


        <!-- Page content-->
       
@endsection