@extends('layout')

@section('title', 'Create new project')

@section('content')
    <h1>Create new project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>
        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
@endsection
