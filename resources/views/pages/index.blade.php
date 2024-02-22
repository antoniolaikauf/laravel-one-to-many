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
        @foreach($types as $type)
        <li class="my-3">
            <div>
                {{$type->risorse_usate}}
            </div>

            @if($type->in_gruppo)
            <span>
                progetto fatto in gruppo
            </span>
            @endif
            <ul>
                @foreach($type-> projects as $project)
                <li>
                    {{$project->nome}}
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ul>
</div>
@endsection