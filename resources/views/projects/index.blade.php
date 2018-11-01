@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Projects</h1>
    @foreach ($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach
    <p><a href="/projects/create" class="button is-light">Add Project</a></p>
@endsection
