<html>
    <head>
        @vite(['resources/js/app.js','resources/js/fontawesome.js','resources/css/animate.min.css','resources/js/anime.es.js'])
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <link href='{{asset('storage/assets/css/anicollection.css')}}' rel='stylesheet'  type='text/css'>

        <script src="{{asset('storage/assets/js/typed.js')}}"></script>
        <style>
            hr.style-1 {
                height: 12px;
                border: 0;
                box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
            }
            hr.style-2 {
                border: 0;
                height: 3px;
                background-image: linear-gradient(to right, #0d6efd , yellow);
            }
            hr.style-3 {
                border: 0;
                height: 2; /* Firefox... */
                box-shadow: 0 0 10px 2px #0d6efd;
                background-image: linear-gradient(to right, #0d6efd , yellow);
            }
            hr.style-3:after {  /* Not really supposed to work, but does */
                content: "\00a0";  /* Prevent margin collapse */
            }
        </style>
    </head>
    <header>
        <div>
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
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
        <div class=" container-fluid d-grid gap-3"data-anijs="if: onRunFinished, on: $AniJSNotifier, do: animate__fadeIn animated">
            <div class="row pt-5">
                <div class="col-md-12 pt-2">
                    <div class="row p-4"style="background-image:linear-gradient(to bottom, rgba(0,0,0,0) 97%,
                    rgba(255,255,255,1)), url('{{asset('storage/img/abstract-dark-blue-futuristic-digital-grid-background.jpg')}}');
                    no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    background-size: cover;
                    -o-background-size: cover;">
                        <div class="col-6">
                            <div class="d-flex aligns-items-center justify-content-center" id="profile_img">
                                <img src="{{asset('storage/img/Profile.jpg')}}" class="img-thumbnail rounded-circle" alt="..." width="50%">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-transparent text-bg-dark d-flex align-items-center " style="height: 100%;" >
                                <h1 class="font-monospace">
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
                <div class="col-lg-4" data-anijs="if: onRunFinished, on: $AniJSNotifier, do: animate__fadeIn animated">
                    <div class="row bg-transparent text-bg-light justify-end text-lg-end" style="height: 100%;" >
                        <div class="col-md-8">
                            <h4 class=""><b>GET IN TOUCH</b></h4>
                            <h3 class="font-monospace">ariff.ofl@yahoo.com</h3>
                        </div>
                        <div class=" col-lg-1 align-self-lg-center"><h2><i class="fa-solid fa-envelope"></i></h2></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <hr class=" col-md-8 border border-2 border-primary style-3" style="">
            </div>
            <div class="row ">
                <div class=" col-md-6">
                    <div class="row-fluid">
                        <div>

                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="row-fluid ">
                        <div class="col-12 pb-5">
                            <h2 class="ps-4 display-5"><b>About Me</b></h2>
                        </div>
                        <div class="col-12 ">
                            <h4 class="ps-4 pb-3"><b>Current Job</b></h4>
                            <h4 class="ps-4 font-monospace">PAKAR SCIENO TW SDN BHD</h4>
                            <h4 class="ps-4 font-monospace">EXECUTIVE IT</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  justify-content-start">
                <hr class=" col-md-8 border border-2 border-primary style-3" style="">
            </div>
            <div class="row ">
                <div class=" col-md-6">
                    <div class="row-fluid ">
                        <div class="col-12 pb-5">
                            <h2 class="ps-4 display-5"><b>Education</b></h2>
                        </div>
                        <div class="col-12 ">
                            <h4 class="ps-4 pb-3"><b>Current Job</b></h4>
                            <h4 class="ps-4 font-monospace">PAKAR SCIENO TW SDN BHD</h4>
                            <h4 class="ps-4 font-monospace">EXECUTIVE IT</h4>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="row-fluid">
                        <div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <hr class=" col-md-8 border border-2 border-primary style-3" style="">
            </div>
            <div class="row ">
                <div class=" col-md-6">
                    <div class="row-fluid">
                        <div>

                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="row-fluid ">
                        <div class="col-12 pb-5">
                            <h2 class="ps-4 display-5"><b>Skills</b></h2>
                        </div>
                        <div class="col-12 ">
                            <h4 class="ps-4 pb-3"><b>Current Job</b></h4>
                            <h4 class="ps-4 font-monospace">PAKAR SCIENO TW SDN BHD</h4>
                            <h4 class="ps-4 font-monospace">EXECUTIVE IT</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              </a>

              <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
              </ul>
            </footer>
          </div>
    </footer>
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
