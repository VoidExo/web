<?php 
    require_once "../config/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../Image/Group 8.png" type="image/x-icon">
    <title>DEMOV</title>
</head>
<body>

        <nav class="navbar navbar-expand-lg col-md-12" style="position: absolute;">
            <div class="container-fluid">
                <span><a class="navbar-brand" href="#">de<span>mov</span></a></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">movies</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Most watched</a></li>
                                <li><a class="dropdown-item" href="">Cinemaxxi</a></li>
                                <li><a class="dropdown-item" href="">MCU</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">TV series</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Most watched</a></li>
                                <li><a class="dropdown-item" href="">MCU</a></li>
                                <li><a class="dropdown-item" href="">Amazon Prime</a></li>
                                <li><a class="dropdown-item" href="">Apple TV+ Series</a></li>
                                <li><a class="dropdown-item" href="">Disney+ Series</a></li>
                                <li><a class="dropdown-item" href="">HBO Series</a></li>
                                <li><a class="dropdown-item" href="">Netflix Series</a></li>
                            </ul>
                        </li>
                        <div class="capital">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                categories
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">action</a></li>
                                    <li><a class="dropdown-item" href="#">adventure</a></li>
                                    <li><a class="dropdown-item" href="#">animation</a></li>
                                    <li><a class="dropdown-item" href="#">comedy</a></li>
                                    <li><a class="dropdown-item" href="#">crime</a></li>
                                    <li><a class="dropdown-item" href="#">drama</a></li>
                                    <li><a class="dropdown-item" href="#">horror</a></li>
                                    <li><a class="dropdown-item" href="#">mystery</a></li>
                                    <li><a class="dropdown-item" href="#">romance</a></li>
                                    <li><a class="dropdown-item" href="#">sci-fi</a></li>
                                    <li><a class="dropdown-item" href="#">thriller</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">view more</a></li>
                                </ul>
                            </li>

                        </div>
                    </ul>

                    <!-- search bar -->
                    <div class="container-search">
                        <form class="search-bar">
                            <input type="text" name="q" id="" placeholder="Search a movie, Series...">
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>    
                    <!-- end bar -->


                    <div class="container-not">
                        <div class="not-control">
                            <div class="not-item">
                                <a class="link" href=""><i class="fa-solid fa-bell"></i></a>
                            </div>
                        </div>
                    </div>

                    <div id="myprofile" class="icon-profile">
                        <div class="icon-control">
                            <div class="image">
                                <a class="icon-link" href="">
                                    <img class="item" src="../Image/profile.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </nav>
        <!-- hero -->


        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    
                    <img class="item-1 bd-placeholder-img" src="../Image/hero.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
                    <div class="container">
                    <div class="carousel-caption text-start">
                        <h1><img src="../Image/title.png" alt=""></h1>
                        <p class="desk opacity-75">Two brothers follow their father's footsteps as hunters, fighting evil supernatural beings of many kinds, including monsters, demons, and gods that roam the earth</p>
                        <div class="genre">
                            <h3>genres :</h3>
                            <p class="gen-list">Horor, Action</p>
                            <div class="more">
                                <div class="content"><a href="">3+</a></div>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <h6>6.9/10</h6>
                        </div>
                        <p><a class="btn btn-lg btn-primary" href="#">watch now</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <img class="item-1 bd-placeholder-img" src="../Image/john wick4.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
                    <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 style="font-family: bebasneue, sans-serif; font-size: 50px;">john wick 4</h1>
                        <p class="desk opacity-75">John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.</p>
                        <div class="genre">
                            <h3>genres :</h3>
                            <p class="gen-list">Crime, Action, Thriller</p>
                            <div class="more">
                                <div class="content"><a href="">3+</a></div>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <h6>7.7/10</h6>
                        </div>
                        <p><a class="btn btn-lg btn-primary" href="#">watch now</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <img class="item-1 bd-placeholder-img" src="../Image/strange.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
                    <div class="container">
                    <div class="carousel-caption text-start">
                        <h1><img src="../Image/STRANGERS-THINGS-8-5-2024-removebg-preview.png" width="325px" alt=""></h1>
                        <p class="desk opacity-75">The disappearance of a young boy in a small town uncovers a mystery involving secret experiments, frightening supernatural forces, and a strange little girl.</p>
                        <div class="genre">
                            <h3>genres :</h3>
                            <p class="gen-list">Horor, Action</p>
                            <div class="more">
                                <div class="content"><a href="">3+</a></div>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <h6>8.7/10</h6>
                        </div>
                        <p><a class="btn btn-lg btn-primary" href="#">watch now</a></p>
                    </div>
                    </div>
                </div>
                <div class="item-4 carousel-item">
                    
                    <img class="item-1 bd-placeholder-img" src="../Image/horror.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
                    <div class="container">
                    <div class="carousel-caption text-start">
                        <h1><img src="../Image/a_quiet_place-removebg-preview.png" width="325px" style="transform: translateY(20%);" alt=""></h1>
                        <p class="desk opacity-75">A family struggles for survival in a world invaded by alien creatures with ultra-sensitive hearing.</p>
                        <div class="genre">
                            <h3>genres :</h3>
                            <p class="gen-list">Horor, Sci-fi, Drama</p>
                            <div class="more">
                                <div class="content"><a href="">2+</a></div>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <h6>7.5/10</h6>
                        </div>
                        <p><a class="btn btn-lg btn-primary" href="#">watch now</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <img class="item-1 bd-placeholder-img" src="../Image/carnage.jpg"  width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
                    <div class="container">
                    <div class="carousel-caption text-start" style="transform: translateY(-50%);">
                        <h1><img src="../Image/titlevenom.png" width="300px;" style="transform: translateY(20%);" alt=""></h1>
                        <p class="desk opacity-75">Two brothers follow their father's footsteps as hunters, fighting evil supernatural beings of many kinds, including monsters, demons, and gods that roam the earth</p>
                        <div class="genre">
                            <h3>genres :</h3>
                            <p class="gen-list">Horor, Action</p>
                            <div class="more">
                                <div class="content"><a href="">3+</a></div>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <h6>6.9/10</h6>
                        </div>
                        <p><a class="btn btn-lg btn-primary" href="#">watch now</a></p>
                    </div>
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
        </div>
        <!-- hero end -->
        <div class="gradient">
        </div>

        <div class="trending">
            <div class="slider">
                <div class="title">
                    <div class="title-item">
                        <div class="line"></div>
                        <h1><a href="">trending</a></h1>
                    </div>

                    <div class="view-more">
                        <h2><a href="">view all</a></h2>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>


            
            <picture class="slider-container">
            <?php
            $tampil = tampilNewReleaseGambar($koneksi);

            foreach($tampil as $rec){
            ?>
                <div class="slider-item">

                    <img src="../Upload/Cover/<?= $rec['cover'] ?>" alt="">
                </div>
                <?php  
                

                }
                ?>
            </picture>
        </div>

        <div class="genres">
            <div class="genre-list">
                <ul class="list">
                    <a href="" class="list-item-active"><li class="" class="list-item">all popular</li></a>
                    <a href="" class="item-1"><li class="list-item">action</li></a>
                    <a href="" class="item-2"><li class="list-item">adventure</li></a>
                    <a href="" class="item-3"><li class="list-item">romance</li></a>
                    <a href="" class="item-4"><li class="list-item">fantasy</li></a>
                    <a href="" class="item-5"><li class="list-item">horror</li></a>
                    <a href="" class="item-6"><li class="list-item">thriller</li></a>
                    <a href=" " class="item-7"><li class="list-item">comedy</li></a>
                    <a href="" class="item-8"><li class="list-item">history</li></a>
                    <a href="" class="item-9"><li class="list-item">slice of life</li></a>
                </ul>
            </div>
        </div>

        <div class="continue">
            <div class="slider">
                <div class="title">
                    <div class="title-item">
                        <div class="line"></div>
                        <h1><a href="">continue watch</a></h1>
                    </div>

                    <div class="view-more">
                        <h2><a href="">view all</a></h2>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>


            
            <picture class="slider-container">
            <?php
            $tampil = tampilNewReleaseGambar($koneksi);

            foreach($tampil as $rec){
            ?>
                <div class="slider-item">

                    <img src="../Upload/Cover/<?= $rec['cover'] ?>" alt="">
                </div>
                <?php  
                

                }
                ?>
            </picture>

        </div>
        <div class="continue">
            <div class="slider">
                <div class="title">
                    <div class="title-item">
                        <div class="line"></div>
                        <h1><a href="">action</a></h1>
                    </div>

                    <div class="view-more">
                        <h2><a href="">view all</a></h2>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>


            
            <picture class="slider-container">
            <?php
            $tampil = tampilNewReleaseGambar($koneksi);

            foreach($tampil as $rec){
            ?>
                <div class="slider-item">

                    <img src="../Upload/Cover/<?= $rec['cover'] ?>" alt="">
                </div>
                <?php  
                

                }
                ?>
            </picture>
        </div>
        <div class="continue-last">
            <div class="slider">
                <div class="title">
                    <div class="title-item">
                        <div class="line"></div>
                        <h1><a href="">horror</a></h1>
                    </div>

                    <div class="view-more">
                        <h2><a href="">view all</a></h2>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>


            
            <picture class="slider-container">
            <?php
            $tampil = tampilNewReleaseGambar($koneksi);

            foreach($tampil as $rec){
            ?>
                <div class="slider-item">

                    <img src="../Upload/Cover/<?= $rec['cover'] ?>" alt="">
                </div>
                <?php  
                

                }
                ?>
            </picture>
        </div>
 

            <!-- footer -->

            <footer class="footer">
                <div class="footer-wrapper ">
                    <h1 class="judul">de<span>mov</span></h1>
                    <div class="desk">
                        <p>
                            DEMOV merupakan situs penyedia layanan streaming film dan serial tv gratis. Sama seperti penyedia film dan serial tv lainnya seperti Netflix, Disney+, 
                            HBO, Apple TV+, Amazon Prime Video, dan lainnya. DEMOV berusaha untuk menyediakan layanan streaming gratis untuk selamanya kepada para rakyat Indonesia yang belum mampu berlangganan layanan premium streaming seperti yang disebut diatas.
                            Perlu diperhatikan DEMOV tidak menyediakan 
                            film maupun serial tv dari negara Indonesia.
                        </p>
                    </div>
                </div>
        
                <div class="container-link">
                    <div class="Series">
                        <h3>Original Series</h3>
                        <ul class="footer-link">
                            <li><a class="link" href="">Apple TV+</a></li>
                            <li><a href="">Amazon</a></li>
                            <li><a href="">Disney+</a></li>
                            <li><a href="">HBO</a></li>
                            <li><a href="">Netflix</a></li>
                        </ul>
                    </div>
                    <div class="Categories">
                        <h3>Categories</h3>
                        <ul class="footer-link">
                            <li><a href="">Action</a></li>
                            <li><a href="">Adventure</a></li>
                            <li><a href="">Animation</a></li>
                            <li><a href="">Comedy</a></li>
                            <li><a href="">Drama</a></li>
                            <li><a href="">Horror</a></li>
                            <li><a href="">Sci-fi</a></li>
                        </ul>
                    </div>
                    <div class="DEMOV">
                        <h3>DEMOV</h3>
                        <ul class="footer-link">
                            <li><a href="">DCEU Movie</a></li>
                            <li><a href="">MCU Movie</a></li>
                            <li><a href="">Disney+ Movie And Series</a></li>
                            <li><a href="">Netflix Movie And Series</a></li>
                            <li><a href="">Marvel Studio Series</a></li>
                            <li><a href="">Coming Soon</a></li>
                        </ul>
                    </div>
        
                </div>
            </footer>
            <footer class="footer-bottom" style="padding: 0 ; margin: 0;">
                <div class="judul">
                    <p class="title">
                        Copy right &copy; 2024 by DEMOV. All Rights Reserved.
                    </p>
                </div>
                <div class="social-link">
                    <div class="social-item">
                        <a href="#">help</a>
                    </div>
                    <div class="social-item">
                        <a href="#">privacy</a>
                    </div>
                    <div class="social-item">
                        <a href="#">telegram</a>
                    </div>
                    <div class="social-item">
                        <a href="#">instagram</a>
                    </div>
                    <div class="social-item">
                        <a href="#">discord</a>
                    </div>
                </div>
            </footer>
        


        <!-- <script src="landing.js"></script> -->
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>