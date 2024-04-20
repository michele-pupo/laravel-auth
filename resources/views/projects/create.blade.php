@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Inserisci un nuovo progetto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo progetto</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" name="title" value="{{old('title')}}" required>
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputEmail1" name="description" required>{{old('description')}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="project_image" class="form-label">Copertina</label>
            <textarea type="text" class="form-control @error('project_image') is-invalid @enderror" id="exampleInputEmail1" name="project_image" required>{{old('project_image')}}</textarea>
            @error('project_image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="used_technologies" class="form-label">Tecnologie usate</label>
            <input type="data" class="form-control @error('used_technologies') is-invalid @enderror" id="exampleInputEmail1" name="used_technologies" value="{{old('used_technologies')}}" required>
            @error('used_technologies')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="project_date" class="form-label">Data di consegna</label>
            <input type="data" class="form-control @error('project_date') is-invalid @enderror" id="exampleInputEmail1" name="project_date" value="{{old('project_date')}}" required>
            @error('project_date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="link_github" class="form-label">Link Github</label>
            <input type="data" class="form-control @error('link_github') is-invalid @enderror" id="exampleInputEmail1" name="link_github" value="{{old('link_github')}}" required>
            @error('link_githube')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>

@endsection