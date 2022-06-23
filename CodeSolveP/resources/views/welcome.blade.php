<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->

<style>
.card{
    z-index: 900;
}
</style>
    </head>
    <body class="align-items-center bg-emerald-300 ">

    <div class="container-fluid align-items-center justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row gx-2">

            <div class="col-lg-3 col-md-6">

                <div class="card" style="width: 18rem;" id="card1">
                    <img src="{{asset('img/futuristic-hud.svg')}}" class="card-img-top rounded">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 18rem;" id="card2">
                    <img src="{{asset('img/volcano.svg')}}" class="card-img-top rounded">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card" style="width: 18rem;" id="card3">
                    <img src="{{asset('img/app-development.svg')}}" class="card-img-top rounded">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card" style="width: 18rem;" id="card4">
                    <img src="{{asset('img/teaching-and-learning-in-school.svg')}}" class="card-img-top rounded">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>

        </div>
        <div class="d-flex flex-column justify-content-between fixed-bottom ">
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#49E0EC" fill-opacity="1" d="M0,192L48,192C96,192,192,192,288,202.7C384,213,480,235,576,250.7C672,267,768,277,864,266.7C960,256,1056,224,1152,218.7C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const divs = document.getElementById("card1");
        divs.addEventListener("mouseover", function( event ) {
            console.log("entre");
            anime({
                targets: '#card1',
                scale: 1.1
            });
        }, false);
        divs.addEventListener('mouseleave',function (event) {
            console.log("entre");
            anime({
                targets: '#card1',
                scale: 1
            });
        });




        const wave1 = "M0,192L48,192C96,192,192,192,288,202.7C384,213,480,235,576,250.7C672,267,768,277,864,266.7C960,256,1056,224,1152,218.7C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z",
            wave2 = "M0,320L48,314.7C96,309,192,299,288,261.3C384,224,480,160,576,112C672,64,768,32,864,26.7C960,21,1056,43,1152,42.7C1248,43,1344,21,1392,10.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z",
            wave3 = "M0,224L48,224C96,224,192,224,288,197.3C384,171,480,117,576,133.3C672,149,768,235,864,266.7C960,299,1056,277,1152,256C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z",
            wave4 = "M0,32L48,32C96,32,192,32,288,32C384,32,480,32,576,69.3C672,107,768,181,864,202.7C960,224,1056,192,1152,192C1248,192,1344,224,1392,240L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z";
        anime({
            targets: '.wave> path',
            easing: 'linear',
            duration: 15000,
            fill: '#9c9c9c',
            loop: true,
            direction: 'alternate',
            d: [
                { value: [wave1, wave2] },
                { value: wave3 },
                { value: wave4 },
                { value: wave1 },
            ],
        });

    </script>
    </body>
</html>
