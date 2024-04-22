@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Pagina di amministrazione</h1>
    <div class="container py-5">
        <h1 class="text-center pb-4 display-1 fw-bold text-uppercase">Lista progetti</h1>
        <div class="row row-cols-6 justify-content-start row-gap-2">
            @foreach ($projects as $project)
            <div class="card h-auto d-flex flex-column justify-content-between p-2 border-3 border-danger">
                <div>
                    <img src="{{asset('storage/' . $project->project_image)}}" class="card-img-top w-100 object-fit-cover" alt="Copertina progetto">
                    <div class="comic-body text-center">
                        <h3 class="comic-title">{{$project->name}}</h3>
                        <h4 class="comic-series">{{$project->description}}</h4>
                        <h5 class="comic-date text-info">{{$project->used_technologies}}</h5>
                        <h6 class="comic-price text-danger pb-4">{{$project->project_date}}</h6>
                    </div>
                </div>
                <button class="btn btn-info"><a class="text-decoration-none text-black" href="{{route('admin.projects.show', $project->id)}}">Visualizza</a></button>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-primary mt-5"><a class="text-decoration-none " href="{{route('admin.projects.create')}}">Aggiungi un progetto</a></button>
        </div>
    </div>
</div>

@endsection