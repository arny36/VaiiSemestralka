
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HubariNaCestach</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="resources/css/app.css">

        <style>
            body {
                font-family: 'Nunito';
            }

        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <title>W3.CSS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .mySlides {display:none;}
        </style>


    </head>




    <body class="antialiased">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="bocny-obrazok">
            <img  src="https://library.kissclipart.com/20180831/tsw/kissclipart-alice-in-wonderland-mushroom-png-clipart-mushroom-6e2cbc53e77f8370.jpg" alt="Huba">
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nazvy-stranok active">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nazvy-stranok">
                    <a class="nav-link" href="{{route('galeria')}}">Galéria</a>

                </li>
                <li class="nazvy-stranok">
                    <a class="nav-link" href="mapa.php" >Mapa pre Hubárov</a>
                </li>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        @else
                            <li class="nazvy-stranok">
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                            @if (Route::has('register'))

                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            </li>
                        @endif
                    @endauth
                    </div>
                @endif
            </ul>
        </div>
    </nav>



    <div class="constainer">
        <div class="row">
            <div class="col-lg-6"></div>
                <div class="text-onas" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">O nás</h5>
                        <p class="card-text">Sme malá skupinka hubárov, ktorá sa rada podelí o svoje zážitky a skúsenosti s hubarením.</p>
                        <p>Na stránke sa dozviete veľa zaujimavých vecí ohľadom húb, ich konzumácie a zbierania.</p>
                    </div>
                </div>
                <div class="slide-obrazky"  style="max-width:500px">
                    <img class="mySlides" src="../../public/images/2hubari.jpg" style="width:100%">

                    <img class="mySlides" src="../../public/images/suchohribHlavnaPlocha.jpg" style="width:100%">
                    <img class="mySlides" src="../../public/images/les.jpg" style="width:100%">
                </div>
            </div>

        </div>
    </div>

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 1500); // nastavene na 1,5 sekundy
            }
        </script>

    </body>
</html>

