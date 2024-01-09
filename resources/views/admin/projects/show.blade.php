@extends('layouts.app')

@section('page-title', 'Show')

@section('content')

<section class="section project-showcase py-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="mx-auto" src="{{$project->image}}" alt="project image">
            </div>
            <div class="col-6">
                <h3>{{$project->title}}</h3>
                <p>{{$project->description}}</p>
            </div>
        </div>
    </div>
</section>

@endsection
