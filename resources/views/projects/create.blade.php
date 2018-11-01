@extends('layout')

@section('title', 'Create new project')

@section('content')
    <h1 class="title">Create new project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
       <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Project title">
             </div>
       </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea" placeholder="Project description"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
@endsection

