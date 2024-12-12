@extends('layouts.dashboard')

@section('style')
<style>
</style>
@stop

@section('content')
<div class="container">  
    <div class="row">
        <div class="col-md-8  ms-3">
            {{-- Render the Livewire component and send quiz data to it. --}}
        @livewire('show-question',['quizData' =>$quizData])
        </div>
    </div>
</div>


@stop
