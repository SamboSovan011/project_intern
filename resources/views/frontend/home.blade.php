@extends('layouts.app')
@section('title', 'Potted Pan - Selling Kitchen Utensils')
@section('content')
<style>
    #contentbody {
        background: url('img/kitchen3.jpg');
        background-size: cover;
        display: flex;
        justify-content: center;
        height: 800px;

    }
</style>
{{-- <div id="CarouselContent" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/kitchen1.jpg" alt="first image">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/kitchen2.jpg" alt="first image">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/kitchen3.jpg" alt="first image">
            </div>
        </div>
    </div> --}}
<div id="contentbody">
    <div class="container" >
        <div class="d-flex justify-content-around" style=" margin-top:8rem;">
            <div class="card bg-dark" style="width: 12rem;">
                <img class="img-top img-fluid" src="img/kitchen-furniture.png" alt="kitchen-furniture">
            </div>
            <div class="card bg-dark" style="width: 12rem; ">
                <img class="img-top img-fluid" src="img/kitchen-sink.png" alt="sink and kitchen taps">
            </div>
            <div class="card bg-dark" style="width: 12rem;">
                <img class="img-top img-fluid" src="img/fridge.png" alt="kitchen applainces">
            </div>
        </div>
        <div class="d-flex justify-content-around" style=" margin-top:8rem;">
            <div class="card bg-dark" style="width: 12rem;">
                <img class="img-top img-fluid" src="img/kitchen-furniture.png" alt="kitchen-furniture">
            </div>
            <div class="card bg-dark" style="width: 12rem; ">
                <img class="img-top img-fluid" src="img/kitchen-sink.png" alt="sink and kitchen taps">
            </div>
            <div class="card bg-dark" style="width: 12rem;">
                <img class="img-top img-fluid" src="img/fridge.png" alt="kitchen applainces">
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<script type="text/javascript">
    (function($, interval, kitchen) {

    var i = 0;
    var handle = setInterval(function () {

    $('#contentbody').css("background-image", "url('" + kitchen[i] + "')");

    i++;

    if (i >= kitchen.length) {
        i = 0;
    }
    }, interval);

    })(jQuery, 10000, [
        "{{asset('img/kitchen1.jpg')}}",
        "{{asset('img/kitchen2.jpg')}}",
        "{{asset('img/kitchen3.jpg')}}"
    ]);
</script>
@endsection
