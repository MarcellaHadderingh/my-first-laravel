@extends('layout')

@section('title', 'Laracast')



@section('content')
<h1>My first Website</h1>

<ul>
   @foreach ($tasks as $task)
    <li>
        <?= $task; ?>
    </li>

   @endforeach
</ul>

@endsection