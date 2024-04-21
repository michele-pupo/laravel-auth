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
    <div class="container justify-content-center d-flex gap-5">
        <button class="btn btn-warning"><a class="text-decoration-none text-white" href="{{route('projects.edit', $project->id)}}">Modifica</a></button>
        <button type="button" class="btn btn-danger px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei proprio sicuro di voler eliminare il progetto: {{$project->name}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('projects.destroy', $project->id)}}" method="POST">

                        @csrf

                        @method("DELETE")

                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection