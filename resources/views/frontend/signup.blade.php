@extends('layouts.app')
@section('title', 'Potted Pan - Sign Up')
@section('content')
<style>
    #form-sign-up {
        margin: 5rem;
        padding: 2rem;
    }

    .card {
        border: none;
    }
</style>
<section id="form-sign-up">
    <div class="container d-flex justify-content-center">
        <div class="card col-lg-6 shadow">
            <!-- Default form register -->
            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Sign up</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>

                <!-- E-mail -->
                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
                <!-- Phone number -->
                <input type="text" id="defaultRegisterPhonePassword" class="form-control mb-4"
                    placeholder="Phone number">

                <!-- Password -->
                <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4"
                    placeholder="Password">
                <!-- Confirm Password -->
                <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4"
                    placeholder="Confirm Password">





                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

            </form>
        </div>
    </div>
</section>
@endsection
