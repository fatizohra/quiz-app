@extends('layouts.dashboard')
@section('style')
<style>
    .quiz-container {
        margin: 50px auto;
        max-width: 800px;
        padding: 20px;
    }

    .illustration img {
        max-width: 100%;
        height: auto;
    }

    .content h1 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .buttons .get-started {
        font-size: 16px;
        font-weight: bold;
    }
</style>
@stop
@section('content')

<div id="main">
    <section id="content" class="page-home pagehome-three">
        <div class="container quiz-container">
            @include('includes.alerts.success')
            <div class="row">
                <!-- Illustration Section -->
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="illustration">          
                        <img class="img-fluid"
                             src="assets/capitals.png"
                             alt="banner3-1" title="banner3-1">
                    </div>
                </div>

                <!-- Content Section -->
                <div class="col-md-6 col-sm-12">
                    <div class="content">
                        <h1>The free, fun, and effective way to learn Countries!</h1>
                        <div class="buttons">
                            <a href="{{ route('quiz') }}" 
                               class="get-started btn btn-success btn-block">
                               GET STARTED
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@stop
