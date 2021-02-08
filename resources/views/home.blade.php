@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>


<body>


<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="{{url('images/les.jpg')}}" style="width:100%">
        <div class="text">Najkrajšie zážitky zo slovenských lesov</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="{{url('images/2hubari.jpg')}}" style="width:100%">
        <div class="text">Spoznavanie nových ľudí!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="{{url('images/suchohribHlavnaPlocha.jpg')}}" style="width:100%">
        <div class="text">Najviac vychytané zábery!</div>
    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

</body>
</html>







@endsection
