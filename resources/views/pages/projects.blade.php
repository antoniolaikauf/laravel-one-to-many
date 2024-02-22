@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>
    tipi di progetto
</h1>

<div>
    <ul>
        @foreach($projects as $project)
        <li class="my-3">
            <div>
                {{$project->nome}}
            </div>
            {{$project->type->risorse_usate}}
        </li>
        @endforeach
    </ul>
</div>
@endsection