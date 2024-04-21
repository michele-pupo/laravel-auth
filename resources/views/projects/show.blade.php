@extends('layouts.app')

@section('content')

<div class="d-flex gap-3">
    <img src="{{$project->project_image}}" alt="">
    <div>
        <h2>{{$project->name}}</h2>
        <p>{{$project->description}}</p>
        <div>{{$project->used_technologies}}</div>
        <div>{{$project->project_date}}</div>
        <div>{{$project->link_github}}</div>
    </div>
</div>

@endsection