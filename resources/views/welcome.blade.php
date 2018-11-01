@extends('layout')

@section('content')
    <h1>My {{ $foo }} website!</h1>
    <p>{{ $feed }}</p>
    <ul>
<!--         <?php foreach ($tasks as $task) : ?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>
 -->
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
     </ul>
@endsection

