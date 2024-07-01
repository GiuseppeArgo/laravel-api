@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mt-5">Titolo: {{ $project->name }}</h1>
        <p class="mt-5">Descrizione: {{ $project->description }}</p>
        <p class="mt-5">Slug: {{ $project->slug }}</p>
        <p>Tipo: {{ $project->type?->name }}</p>
        <p>Tecnologie:
            @if($project->technologies->isNotEmpty())
                <ul>
                    @foreach($project->technologies as $technology)
                        <li>{{ $technology->name }}</li>
                    @endforeach
                </ul>
            @else
                <p>Nessuna tecnologia</p>
            @endif
        </p>
    </div>
@endsection