<html>
    <head>
        @vite(['resources/js/app.js','resources/js/fontawesome.js','resources/css/animate.min.css','resources/js/anime.es.js'])
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <link href='{{asset('storage/assets/css/anicollection.css')}}' rel='stylesheet'  type='text/css'>

        <script src="{{asset('storage/assets/js/typed.js')}}"></script>

    </head>
    <header>
        <div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <body>
        <div class=" container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row p-4"style="background-image: url('{{asset('storage/img/abstract-dark-blue-futuristic-digital-grid-background.jpg')}}');
                    no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    background-size: cover;
                    -o-background-size: cover;">
                        <div class="col-md-6">
                            <div class="d-flex aligns-items-center justify-content-center" id="profile_img">
                                <img src="{{asset('storage/img/Profile.jpg')}}" class="img-thumbnail rounded-circle" alt="..." width="50%">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-transparent text-bg-dark d-flex align-items-center " style="height: 100%;" >
                                <h1 class="font-monospace" style="text-align: justify;">
                                    <p class=" animate__animated animate__fadeIn">I am Mohd Ariff <br> And I am A <br>
                                        <span id="spin" class=" animated_text text-danger text-bg-warning"></span>
                                    </p>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-4 justify-content-end" >
                <div class="col-md-3" data-anijs="if: mouseover, do: swing animated">
                    <div class="bg-transparent text-bg-light d-flex align-items-right " style="height: 100%;" >
                        <div class="col-md-8">
                            <h4><b>GET IN TOUCH</b></h4>
                            <h3 class="font-monospace">ariff.ofl@yahoo.com</h3>
                        </div>
                        <div class=" col-md-4 d-flex align-items-center"><h2><i class="fa-solid fa-envelope"></i></h2></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    var typed = new Typed(".animated_text",{
    strings: ["Programmer","Web Developer"] ,
    typeSpeed: 100,
    backSpeed: 50,
    loop: true

    })
</script>

<script src="{{asset('storage/assets/js/anijs.js')}}"></script>
