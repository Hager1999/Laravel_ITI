@extends('layouts.layout')
<!-- not found message -->
@section('main')
<section class="about py-5" id="about">
    <div class="container">

        <div class="row">
            <div class="col-10 mx-auto col-md-6 my-5">
                <h1 class="text-capitalize">Sorry </h1>
                <p class="my-4 text-muted w-75">{{$error}}</p>
                <a href="/store" class="btn btn-outline-secondary btn-black text-uppercase ">explore</a>

            </div>
        </div>
    </div>
</section>
@endsection
<!-- end of not found message  -->
