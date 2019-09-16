@extends('layouts.app')
@section('title', 'Potted Pan - Selling Kitchen Utensils')
@section('content')
<style>
    .carousel-item {
        height: 500px;
    }

    .d-block {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        max-width: 100%;
    }

    .card-img-top{
        height: 212.26px !important;
    }
</style>
<section>
    <div id="CarouselContent" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#CarouselContent" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselContent" data-slide-to="1"></li>
            <li data-target="#CarouselContent" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/kitchen1.jpg" alt="first image">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/kitchen2.jpg" alt="first image">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/kitchen3.jpg" alt="first image">
            </div>
        </div>
        <div class="carousel-control-prev" href="#CarouselContent" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </div>
        <div class="carousel-control-next" href="#CarouselContent" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </div>
    </div>
</section>
<section>
    <div class="container" style="padding-bottom:8rem;">
        <div class="d-flex justify-content-around" style=" margin-top:8rem;">
            <div class="card" style="width: 20rem; ">
                <img class="card-img-top img-fluid" src="img/kitchen-furniture.png" alt="kitchen-furniture">
                <div class="card-body">
                    <h5 class="card-title">Kitchen Furniture</h5>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus in
                        nisi et tincidunt. Phasellus semper lobortis magna, id lacinia enim hendrerit non. Nunc
                        ultricies dictum augue, et lacinia metus imperdiet nec. Vestibulum sapien erat, imperdiet non
                        mauris in, tempor ultrices nisi. Nulla eleifend malesuada nulla, vel fermentum nisi ultrices
                        vitae. Ut vestibulum gravida enim in eleifend. Sed vel est sit amet est cursus luctus. Maecenas
                        mattis consequat magna, eget molestie lectus pellentesque ut. Curabitur tempus felis mi, vitae
                        laoreet massa dictum vel. Suspendisse potenti. Aenean nec dapibus dolor. Quisque ultrices
                        lobortis lorem, eget tincidunt orci egestas vitae. Nullam posuere bibendum semper. Nullam
                        pulvinar varius finibus. </p>
                </div>
            </div>
            <div class="card" style="width: 20rem; ">
                <img class="card-img-top img-fluid" src="img/sink.png" alt="sink and kitchen taps">
                <div class="card-body">
                    <h5 class="card-title">Sinks and Kitchen Taps</h5>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus in
                        nisi et tincidunt. Phasellus semper lobortis magna, id lacinia enim hendrerit non. Nunc
                        ultricies dictum augue, et lacinia metus imperdiet nec. Vestibulum sapien erat, imperdiet non
                        mauris in, tempor ultrices nisi. Nulla eleifend malesuada nulla, vel fermentum nisi ultrices
                        vitae. Ut vestibulum gravida enim in eleifend. Sed vel est sit amet est cursus luctus. Maecenas
                        mattis consequat magna, eget molestie lectus pellentesque ut. Curabitur tempus felis mi, vitae
                        laoreet massa dictum vel. Suspendisse potenti. Aenean nec dapibus dolor. Quisque ultrices
                        lobortis lorem, eget tincidunt orci egestas vitae. Nullam posuere bibendum semper. Nullam
                        pulvinar varius finibus. </p>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img class="card-img-top img-fluid" src="img/appliance.png" alt="kitchen applainces">
                <div class="card-body">
                    <h5 class="card-title">Kitchen Appliances</h5>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus in
                        nisi et tincidunt. Phasellus semper lobortis magna, id lacinia enim hendrerit non. Nunc
                        ultricies dictum augue, et lacinia metus imperdiet nec. Vestibulum sapien erat, imperdiet non
                        mauris in, tempor ultrices nisi. Nulla eleifend malesuada nulla, vel fermentum nisi ultrices
                        vitae. Ut vestibulum gravida enim in eleifend. Sed vel est sit amet est cursus luctus. Maecenas
                        mattis consequat magna, eget molestie lectus pellentesque ut. Curabitur tempus felis mi, vitae
                        laoreet massa dictum vel. Suspendisse potenti. Aenean nec dapibus dolor. Quisque ultrices
                        lobortis lorem, eget tincidunt orci egestas vitae. Nullam posuere bibendum semper. Nullam
                        pulvinar varius finibus. </p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around" style=" margin-top:8rem;">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top img-fluid" src="img/accessories.png" alt="cooking-accessories">
                <div class="card-body">
                    <h5 class="card-title">Cooking Accessories</h5>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus in
                        nisi et tincidunt. Phasellus semper lobortis magna, id lacinia enim hendrerit non. Nunc
                        ultricies dictum augue, et lacinia metus imperdiet nec. Vestibulum sapien erat, imperdiet non
                        mauris in, tempor ultrices nisi. Nulla eleifend malesuada nulla, vel fermentum nisi ultrices
                        vitae. Ut vestibulum gravida enim in eleifend. Sed vel est sit amet est cursus luctus. Maecenas
                        mattis consequat magna, eget molestie lectus pellentesque ut. Curabitur tempus felis mi, vitae
                        laoreet massa dictum vel. Suspendisse potenti. Aenean nec dapibus dolor. Quisque ultrices
                        lobortis lorem, eget tincidunt orci egestas vitae. Nullam posuere bibendum semper. Nullam
                        pulvinar varius finibus. </p>
                </div>
            </div>
            <div class="card" style="width: 20rem; ">
                <img class="card-img-top img-fluid" src="img/table-accessorie.png" alt="table dining accessories">
                <div class="card-body">
                    <h5 class="card-title">Dining Table Accessories</h5>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus in
                        nisi et tincidunt. Phasellus semper lobortis magna, id lacinia enim hendrerit non. Nunc
                        ultricies dictum augue, et lacinia metus imperdiet nec. Vestibulum sapien erat, imperdiet non
                        mauris in, tempor ultrices nisi. Nulla eleifend malesuada nulla, vel fermentum nisi ultrices
                        vitae. Ut vestibulum gravida enim in eleifend. Sed vel est sit amet est cursus luctus. Maecenas
                        mattis consequat magna, eget molestie lectus pellentesque ut. Curabitur tempus felis mi, vitae
                        laoreet massa dictum vel. Suspendisse potenti. Aenean nec dapibus dolor. Quisque ultrices
                        lobortis lorem, eget tincidunt orci egestas vitae. Nullam posuere bibendum semper. Nullam
                        pulvinar varius finibus. </p>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img class="card-img-top img-fluid" src="img/bakeware.png" alt="bakeware">
                <div class="card-body">
                    <h5 class="card-title">Cookware and Bakeware</h5>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus in
                        nisi et tincidunt. Phasellus semper lobortis magna, id lacinia enim hendrerit non. Nunc
                        ultricies dictum augue, et lacinia metus imperdiet nec. Vestibulum sapien erat, imperdiet non
                        mauris in, tempor ultrices nisi. Nulla eleifend malesuada nulla, vel fermentum nisi ultrices
                        vitae. Ut vestibulum gravida enim in eleifend. Sed vel est sit amet est cursus luctus. Maecenas
                        mattis consequat magna, eget molestie lectus pellentesque ut. Curabitur tempus felis mi, vitae
                        laoreet massa dictum vel. Suspendisse potenti. Aenean nec dapibus dolor. Quisque ultrices
                        lobortis lorem, eget tincidunt orci egestas vitae. Nullam posuere bibendum semper. Nullam
                        pulvinar varius finibus. </p>
                </div>
            </div>
        </div>
    </div>
</section>





{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
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
</script> --}}
@endsection
