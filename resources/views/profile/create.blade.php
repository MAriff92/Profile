<html>
    <head>
        @vite(['resources/js/app.js','resources/js/fontawesome.js','resources/css/animate.min.css','resources/js/anime.es.js'])
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <link href='{{asset('storage/assets/css/anicollection.css')}}' rel='stylesheet'  type='text/css'>

        <script src="{{asset('storage/assets/js/typed.js')}}"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="{{asset('storage/assets/js/jquery.circle-progress.min.js')}}"></script>
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

            .circle-progress-value {
                stroke-width: 6px;
                stroke: hsl(209, 98%, 44%);
            }
            .circle-progress-circle {
                stroke-width: 6px;
                stroke: hsl(199, 100%, 84%);
            }
            .circle-progress-text {
                stroke: hsl(209, 98%, 44%);
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
<script>
    $('.progress_laravel').circleProgress({
        max: 100,
        value: 80,
        textFormat: 'percent',
    });
    $('.progress').circleProgress({
        max: 100,
        value: 60,
        textFormat: 'percent',
    });

</script>

<script src="{{asset('storage/assets/js/anijs.js')}}"></script>
