@extends('layouts.app')

@section('content')



<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>


-->






<body class="antialiased">




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
            <img class="mySlides" src="{{url('images/les.jpg')}}" style="width:100%">

            <img class="mySlides" src="{{url('images/2hubari.jpg')}}" style="width:100%">
            <img class="mySlides" src="{{url('images/suchohribHlavnaPlocha.jpg')}}" style="width:100%">
        </div>
    </div>

</div>
</div>

<script>
    var cisloObrazka = 0;
    generovanie();

    function generovanie() {
        var i;
        var obrazky = document.getElementsByClassName("mySlides");
        for (i = 0; i < obrazky.length; i++) {
            obrazky[i].style.display = "none";
        }
        cisloObrazka++;
        if (cisloObrazka > obrazky.length) {cisloObrazka = 1}
        obrazky[cisloObrazka-1].style.display = "block";
        setTimeout(generovanie, 1500); // nastavene na 1,5 sekundy
    }
</script>

</body>
</html>
@endsection
